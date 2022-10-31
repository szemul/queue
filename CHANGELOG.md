# Change Log

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [2.0.0] - 2022-10-31

### Changed

- Changed interface `\Szemul\Queue\Message\MessageInterface` by adding `getCreatedAt` method
- Changed method `\Szemul\Queue\Message\Message::__construct` by adding `createdAt` parameter
