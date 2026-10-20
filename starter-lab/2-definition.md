# Definition: Developer Starter Pack

## Core definition

A **Developer Starter Pack** is the initial collection of software, accounts, workspace conventions, and repeatable habits used to develop, run, inspect, and save a project.

The pack is **project-dependent**. A web project, a Python script, and an Android application do not require exactly the same tools.

## Key concepts

### Code editor or IDE

A **code editor** is used to create and edit source files. An **IDE** (Integrated Development Environment) usually combines an editor with language support, navigation, debugging, testing, and project features. Visual Studio Code is a flexible editor; JetBrains products are examples of IDEs focused on particular languages or ecosystems.

### Extension

An **extension** adds a feature to an editor. Examples include formatting, code navigation, Markdown preview, and Git visualization. Extensions should solve a real problem; too many can make an editor slower or harder to understand.

### Runtime

A **runtime** is the software that executes a program. Node.js runs JavaScript outside the browser, Python runs Python programs, and a Java Development Kit (JDK) supports Java development. A runtime is not the same thing as an editor: one executes code, while the other helps you write it.

### Package manager

A **package manager** downloads and manages reusable project packages. npm is commonly used with Node.js. A package manager can be useful, but it also introduces project files and dependencies, so it should be used deliberately.

### Version control

**Version control** records changes to files over time. Git is the tool; GitHub and GitLab are hosting services that can store Git repositories and support collaboration. A commit is a named checkpoint, not a replacement for a backup strategy.

### Local server

A **local server** serves a project from your own computer so that a browser can load it through a local address. It is useful for testing pages, routes, assets, and browser behavior before deployment.

### Developer tools

**Developer tools** are browser panels used to inspect and troubleshoot a web page. Common panels include Elements, Console, Network, and Application. They show what the browser receives and does; they do not automatically fix the source code.

## A useful selection rule

Choose a tool when it answers a concrete need:

| Need | Suitable category |
| --- | --- |
| Write and navigate code | Editor or IDE |
| Execute the project | Runtime |
| Inspect a web page | Browser developer tools |
| Save a meaningful change | Git |
| Serve local web files | Local server |
| Store structured data locally | SQLite or a database server |

The smallest toolset that lets you work confidently is a good starter pack.
