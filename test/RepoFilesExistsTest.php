<?php

use PHPUnit\Framework\TestCase;

class RepoFilesExistsTest extends TestCase
{
    private $_requiredFiles;

    protected function setUp()
    {
        $this->_requiredFiles = [
            './.codeclimate.yml',
            './.env_sample',
            './ISSUE_TEMPLATE.md',
            './PULL_REQUEST_TEMPLATE.md',
            './.gitignore',
            './.travis.yml',
            './CHANGELOG.md',
            './CODE_OF_CONDUCT.md',
            './CONTRIBUTING.md',
            ['./LICENSE.md', './LICENSE.txt'],
            './README.md',
            './TROUBLESHOOTING.md',
            './USAGE.md',
        ];
    }

    public function testFileArePresentInRepo()
    {
        foreach ($this->_requiredFiles as $filePath) {
            if (is_array($filePath)) {
                $exists = array_filter(
                    $filePath,
                    function ($file) {
                        return file_exists($file);
                    }
                );
                $files = join('" and "', $filePath);
                $this->assertNotEmpty($exists, "File \"{$files}\" does not exist in repo!");
            } else {
                $this->assertFileExists($filePath, "File \"{$filePath}\" does not exist in repo!");
            }
        }
    }
}

