# Changelog

## 2024-07-17 (2.0.2)


## 2024-06-23 (2.0.1)


## 2024-06-23 (2.0.1)


## 2024-06-23 (2.0.1)


## 2024-05-16 (2.0.0)
### Breaking Changes 🚨
* Upgrade the fundamental of the `github-actions` package and its `get-release-notes`, `prepare-node`, and `update-version-tags` actions to use Node.js v20. (https://github.com/woocommerce/grow-test/pull/112)
* Upgrade the `automerge-released-trunk`, `coverage-report`, and `prepare-php` actions to use Node.js v20. (https://github.com/woocommerce/grow-test/pull/114)
* Upgrade the `phpcs-diff` action to use Node.js v20. (https://github.com/woocommerce/grow-test/pull/116)
* Upgrade the `eslint-annotation` and `stylelint-annotation` actions to use Node.js v20. (https://github.com/woocommerce/grow-test/pull/117)
* Upgrade the `get-plugin-releases` action to use Node.js v20. (https://github.com/woocommerce/grow-test/pull/119)
* Upgrade the `run-qit-extension` action to use Node.js v20. (https://github.com/woocommerce/grow-test/pull/120)
* Upgrade the `merge-trunk-develop-pr`, `prepare-extension-release`, and `publish-extension-dev-build` actions to use Node.js v20. (https://github.com/woocommerce/grow-test/pull/121)
* Upgrade the `branch-label` action to use Node.js v20. (https://github.com/woocommerce/grow-test/pull/122)
### Documentation 📚
* Update the version in docs of the `hook-documentation`, `prepare-mysql`, and `run-qit-annotate` actions to v2. (https://github.com/woocommerce/grow-test/pull/115)
* Update the README for the `github-actions` package to be based on Node.js v20. (https://github.com/woocommerce/grow-test/pull/123)

## 2024-05-16 (1.11.4)
### Bug Fixes 🐛
* Avoid running malicious inputs as shell commands in Custom GitHub actions and relate workflows. (https://github.com/woocommerce/grow-test/pull/131)
### Tweaked 🔧
* Remove the unused step `id` from the `run-qit-extension` action. (https://github.com/woocommerce/grow-test/pull/130)

## 2024-05-13 (1.11.3)
### Tweaked 🔧
* Update QIT test types `api` and `e2e` for the `run-qit-extension` action to align with the renamed types. (https://github.com/woocommerce/grow-test/pull/127)

## 2024-04-25 (1.11.2)
### Tweaked 🔧
* Add PHP linter and PHP linting in GitHub Actions. (https://github.com/woocommerce/grow-test/pull/109)
* Get Plugin Releases - Prevent unstable releases. (https://github.com/woocommerce/grow-test/pull/102)

## 2024-02-06 (1.11.1)
### Bug Fixes 🐛
* Rename `add/qit-workflows-test-build` to `actions-v1` branch. (https://github.com/woocommerce/grow-test/pull/96)

## 2024-02-06 (1.11.0)
### New Features 🎉
* Add a new workflow to GitHub Actions for creating the test build of Custom GitHub actions. (https://github.com/woocommerce/grow-test/pull/92)
* Add a new workflow to GitHub Actions for deleting the test build of Custom GitHub actions. (https://github.com/woocommerce/grow-test/pull/93)
* Add actions and workflows for QIT tests. (https://github.com/woocommerce/grow-test/pull/81)

## 2023-11-16 (1.10.2)
### Bug Fixes 🐛
* Update rollup to fix -actions build. (https://github.com/woocommerce/grow-test/pull/90)
### Tweaked 🔧
* Add update docs & ideas step to extension release checklist. (https://github.com/woocommerce/grow-test/pull/89)

## 2023-08-29 (1.10.1)
### Tweaked 🔧
* Fix typos in the `publish-extension-dev-build` action. (https://github.com/woocommerce/grow-test/pull/76)

## 2023-08-08 (1.10.0)
### New Features 🎉
* Add merge-trunk-develop-pr action. (https://github.com/woocommerce/grow-test/pull/71)
### Tweaked 🔧
* Remove `trunk`->`develop` merge step from the release checklist of `automerge-released-trunk` action. (https://github.com/woocommerce/grow-test/pull/69)
* Capitalized title of release PR. (https://github.com/woocommerce/grow-test/pull/70)
* Restore the "merge to develop" step to the extension release checklist. (https://github.com/woocommerce/grow-test/pull/73)

## 2023-07-24 (1.9.0)
### New Features 🎉
* Add automerge-released-trunk action. (https://github.com/woocommerce/grow-test/pull/64)

## 2023-07-24 (1.8.1)
### Bug Fixes 🐛
* Get Plugin releases Action: Fix error counting RC releases. (https://github.com/woocommerce/grow-test/pull/66)
### Tweaked 🔧
* Reorganize the package directory structure for the GitHub custom actions. (https://github.com/woocommerce/grow-test/pull/61)

## 2023-06-19 (1.8.0)
### New Features 🎉
* Add pre- & post-steps to extension release PR. (https://github.com/woocommerce/grow-test/pull/58)
* Add a new GH custom action for publishing or updating the extension development build via a pre-release on GitHub. (https://github.com/woocommerce/grow-test/pull/60)

## 2023-06-09 (1.7.0)
### New Features 🎉
* Add GitHub Action to facilitate producing documentation of WordPress hooks within a codebase. (https://github.com/woocommerce/grow-test/pull/45)
* Add the ability to develop actions using PHP in addition to JavaScript (https://github.com/woocommerce/grow-test/pull/45)

## 2023-05-30 (1.6.0)
### New Features 🎉
* Add GH action for release PR & checklist. (https://github.com/woocommerce/grow-test/pull/56)

## 2023-05-25 (1.5.0)
### New Features 🎉
* [Hackday] Action Get Plugin Releases. (https://github.com/woocommerce/grow-test/pull/50)
### Tweaked 🔧
* Tweak - Upgrade actions/core to v1.10.0. (https://github.com/woocommerce/grow-test/pull/54)
### Documentation 📚
* Fix the missed `jobs` and incorrect `uses` in the README of `get-release-notes` action. (https://github.com/woocommerce/grow-test/pull/53)

## 2023-04-14 (1.4.1)
### Tweaked 🔧
* Replace the deprecated command `set-output` of GitHub Actions. (https://github.com/woocommerce/grow-test/pull/48)

## 2023-04-04 (1.4.0)
### New Features 🎉
* Add coverage Report as PR comment. (https://github.com/woocommerce/grow-test/pull/44)

## 2022-07-21 (1.3.0)
### New Features 🎉
* Add annotation actions of `eslint` and `stylelint` for annotating the linting results via their formatter. (https://github.com/woocommerce/grow-test/pull/35)
### Tweaked 🔧
* Change the build tool of `github-actions` package to `rollup`. (https://github.com/woocommerce/grow-test/pull/34)

## 2022-07-13 (1.2.1)
### Bug Fixes 🐛
* Fix a bash script syntax error in the `phpcs-diff` action. (https://github.com/woocommerce/grow-test/pull/30)

## 2022-07-13 (1.2.0)
### New Features 🎉
* Add "php-version" input to the phpcs-diff action for specifying PHP version. (https://github.com/woocommerce/grow-test/pull/25)
* Add "dev" change type to `branch-label` GHA. (https://github.com/woocommerce/grow-test/pull/28)
### Bug Fixes 🐛
* Fix the JSON parse error when manually releasing the `github-actions` package. (https://github.com/woocommerce/grow-test/pull/24)
* Fix the JSON syntax error of running `phpcd-diff` action when no changes are made. (https://github.com/woocommerce/grow-test/pull/27)

## 2022-07-05 (1.1.0)
### New Features 🎉
* Add a GitHub action for adding branch type labels. (https://github.com/woocommerce/grow-test/pull/14)
* Add escaped outputs `release-notes-shell` and `release-changelog-shell` for the get-release-notes action. (https://github.com/woocommerce/grow-test/pull/20)
* Add release process for the `github-actions` package. (https://github.com/woocommerce/grow-test/pull/22)
### Bug Fixes 🐛
* Fix the issue that unescaped chars may break the release preparation of `github-actions` package. (https://github.com/woocommerce/grow-test/pull/21)

## 2022-06-23 (1.0.0)
### New Features 🎉
* Add custom GitHub actions for reuse across repositories. (https://github.com/woocommerce/grow-test/pull/11)
* Add GitHub action and workflow for the versioning management of the reusable custom actions. (https://github.com/woocommerce/grow-test/pull/12)
* Add an action and a GitHub workflow to get release notes via GitHub and prepare release content. (https://github.com/woocommerce/grow-test/pull/16)
* Add a new custom action `phpcs-diff` to run PHPCS to the changed lines of code in a PR. (https://github.com/woocommerce/grow-test/pull/17)
### Tweaked 🔧
* Tweak the `update-version-tags` action and the `github-actions-release` workflow. (https://github.com/woocommerce/grow-test/pull/18)
