<?php

use PHPUnit\Framework\TestCase;

class RepoFilesExistsTest extends TestCase
{
    private $_requiredFiles;

    protected function setUp(): void
    {
        $this->_requiredFiles = [
            './.env_sample',
            './ISSUE_TEMPLATE.md',
            './PULL_REQUEST_TEMPLATE.md',
            './.gitignore',
            './.github/workflows/test-and-deploy.yml',
            './CHANGELOG.md',
            './CODE_OF_CONDUCT.md',
            './CONTRIBUTING.md',
            './LICENSE',
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
