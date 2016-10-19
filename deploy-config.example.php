<?php
/**
 * Deployment configuration
 *
 * It's preferable to configure the script using this file instead of directly.
 *
 * Rename this file to `deploy-config.php` and edit the
 * configuration options here instead of directly in `deploy.php`.
 * That way, you won't have to edit the configuration again if you download the
 * new version of `deploy.php`.
 *
 * @version 1.3.1
 */

/**
 * Protect the script from unauthorized access by using a secret access token.
 * If it's not present in the access URL as a GET variable named `sat`
 * e.g. deploy.php?sat=Bett...s the script is not going to deploy.
 *
 * @var string
 */
define('SECRET_ACCESS_TOKEN', 'BetterChangeMeNowOrSufferTheConsequences');

/**
 * The address of the remote Git repository that contains the code that's being
 * deployed.
 * If the repository is private, you'll need to use the SSH address.
 *
 * @var string
 */
define('REMOTE_REPOSITORY', 'https://github.com/markomarkovic/simple-php-git-deploy.git');

/**
 * The branch that's being deployed.
 * Must be present in the remote repository.
 *
 * @var string
 */
define('BRANCH', 'master');

/**
 * The location that the code is going to be deployed to.
 * Don't forget the trailing slash!
 *
 * @var string Full path including the trailing slash
 */
define('TARGET_DIR', '/tmp/simple-php-git-deploy/');

/**
 * Output the version of the deployed code.
 *
 * @var string Full path to the file name
 */
define('VERSION_FILE', TMP_DIR.'VERSION');

/**
 * Time limit for each command.
 *
 * @var int Time in seconds
 */
define('TIME_LIMIT', 30);

/**
 * OPTIONAL
 * Backup the TARGET_DIR into BACKUP_DIR before deployment.
 *
 * @var string Full backup directory path e.g. `/tmp/`
 */
define('BACKUP_DIR', false);

/**
 * OPTIONAL
 * Whether to invoke composer after the repository is cloned or changes are
 * fetched. Composer needs to be available on the server machine, installed
 * globaly (as `composer`). See http://getcomposer.org/doc/00-intro.md#globally
 *
 * @var boolean Whether to use composer or not
 * @link http://getcomposer.org/
 */
define('USE_COMPOSER', false);

/**
 * OPTIONAL
 * The options that the composer is going to use.
 *
 * @var string Composer options
 * @link http://getcomposer.org/doc/03-cli.md#install
 */
define('COMPOSER_OPTIONS', '--no-dev');

/**
 * OPTIONAL
 * The COMPOSER_HOME environment variable is needed only if the script is
 * executed by a system user that has no HOME defined, e.g. `www-data`.
 *
 * @var string Path to the COMPOSER_HOME e.g. `/tmp/composer`
 * @link https://getcomposer.org/doc/03-cli.md#composer-home
 */
define('COMPOSER_HOME', false);

/**
 * OPTIONAL
 * Email address to be notified on deployment failure.
 *
 * @var string A single email address, or comma separated list of email addresses
 *      e.g. 'someone@example.com' or 'someone@example.com, someone-else@example.com, ...'
 */
define('EMAIL_ON_ERROR', false);
