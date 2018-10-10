# How To Edit the SendGrid SMTP API repository via GitHub

Editing the SendGrid SMTP API repository is easy! 
If you see an error, a typo, or have something you would like to add, you can make your suggestion via GitHub,
the content management system we use.
Once you have submitted your suggestion, the team can easily review it.

To make changes to this repository follow these steps:

1. Firstly, [fork](https://help.github.com/fork-a-repo/) the project.

2. Now clone your fork, and configure its remotes through your terminal:

   ```bash
   # Clone your fork of the repo into the current directory
   git clone https://github.com/<your-username>/smtpapi-php
   # Navigate to the newly cloned directory
   cd smtpapi-php
   # Assign the original repo to a remote called "upstream"
   git remote add upstream https://github.com/sendgrid/smtpapi-php
   ```

3. If you cloned a while ago, get the latest changes from upstream:

   ```bash
   git checkout <dev-branch>
   git pull upstream <dev-branch>
   ```

4. Create a new topic branch (off the main project development branch) to
   contain your feature, change, or fix:

   ```bash
   git checkout -b <topic-branch-name>
   ```

5. Commit your changes in logical chunks. Please adhere to these [git commit
   message guidelines](http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html)
   or your code is unlikely be merged into the main project. Use Git's
   [interactive rebase](https://help.github.com/articles/interactive-rebase)
   feature to tidy up your commits before making them public.
   
   Generally, we follow the style guidelines as suggested by the official language.
   However, we ask that you conform to the styles that already exist in the library. If you wish to deviate, please explain your reasoning.

   - [pear coding standards](https://pear.php.net/manual/en/standards.php)

   Please run your code through:

   - [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer)

   
6a. Create tests.
All test files are in the [`test`](https://github.com/sendgrid/smtpapi-php/tree/master/test) directory.

For the purposes of contributing to this repo, please update the [`Header.php`](https://github.com/sendgrid/smtpapi-php/blob/master/test/Smtpapi/Header.php) file with unit tests as you modify the code.

```bash
cd test
phpunit
```

6b. Create or update the example code that demonstrates the functionality of this change to the code.

7. Locally merge (or rebase) the upstream development branch into your topic branch:

   ```bash
   git pull [--rebase] upstream master
   ```

8. Push your topic branch up to your fork:

   ```bash
   git push origin <topic-branch-name>
   ```

9. When done, it's finally time to [open your first pull request](https://help.github.com/articles/using-pull-requests/)
    with a clear title and description against the `master` branch. All tests must be passing before we review the Pull Request.

> All contributors to this SendGrid repo need to sign a CLA before their changes can be merged. 

If you have any additional questions, please feel free to check our [CONTRIBUTING guide](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md), [email](mailto:dx@sendgrid.com) us or create an issue in this repo.

Contributors should strive for a professional and “coach-like” tone of voice.
Avoid vague language, and get right to the point. Long and overly complicated explanations are not helpful to a user who wants a quick-and-easy answer. Please don’t be intimidated by these style guidelines. They don’t apply to most minor changes, and more significant changes will be reviewed and edited by the SendGrid team before publication.
