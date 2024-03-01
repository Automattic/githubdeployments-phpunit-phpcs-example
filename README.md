# githubdeployments-phpunit-phpcs-example
An example plugin repository with a workflow script that runs PHP CodeSniffer and PHPUnit. 

The [workflow](.github/workflows/wpcom.yml) does the following:

- Checkout the repository
- Runs the composer action which executes the default command, `composter install`.
- Runs the composer action again with a custom command that runs PHPCodeSniffer
- Runs the composer action again with a custom command that runs PHPUnit
- If all previous actions completely withotu error, it creates a build artifact with name "wpcom" which is required for WordPress.com's GitHub Deployment feature
