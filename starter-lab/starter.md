---
marp: true
theme: default
paginate: false
size: 16:9
style: |
  @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

  section {
    background: #70020f;
    color: #ffe0e3;
    font-family: 'Arial', 'Helvetica', sans-serif;
    font-size: 26px;
    padding: 50px 60px;
    text-transform: uppercase;
    justify-content: flex-start;
  }
  h1, h2 {
    font-family: 'Anton', 'Impact', 'Arial Narrow', sans-serif;
    font-weight: 400;
    color: #ffe0e3;
    line-height: 0.95;
    letter-spacing: -1px;
    margin: 0 0 30px 0;
  }
  h1 { font-size: 110px; }
  h2 { font-size: 84px; }
  h3 {
    font-size: 28px;
    margin: 0;
    color: #e6d9dc;
  }
  p { margin: 0 0 6px 0; }

  /* Light variant (pink background, dark red text) */
  section.light { background: #ffdde0; color: #70020f; }
  section.light h1, section.light h2 { color: #70020f; }
  section.light p, section.light li {
    font-family: 'Anton', 'Impact', 'Arial Narrow', sans-serif;
    font-size: 30px;
    line-height: 1.35;
    color: #111;
  }

  /* Title slide */
  section.title { justify-content: space-between; }
  section.title h1 { font-size: 150px; margin-top: 0; }
  section.title::before {
    content: "DEVEL\A OPER";
    white-space: pre;
    position: absolute;
    right: -60px;
    top: 230px;
    font-family: 'Anton', 'Impact', sans-serif;
    font-size: 300px;
    line-height: 0.95;
    color: #5f0010;
    z-index: 0;
  }
  section.title h1, section.title .by { position: relative; z-index: 1; }
  .by { font-size: 20px; text-transform: none; }
  .by strong {
    font-family: 'Anton', 'Impact', sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    font-size: 24px;
    display: block;
  }

  /* Two-column layout */
  .cols {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    text-align: center;
    margin-top: 60px;
  }
  .cols .col {
    font-family: 'Anton', 'Impact', sans-serif;
    font-size: 34px;
    line-height: 1.25;
  }

  /* Extension lists */
  ul.ext { list-style: none; padding: 0; margin: 10px 0 0 0; }
  ul.ext li { margin-bottom: 22px; font-size: 22px; line-height: 1.3; }
  ul.ext li strong {
    display: block;
    font-size: 30px;
    color: #e6d9dc;
    margin-bottom: 2px;
  }

  /* Bullet lists on dark slides */
  section:not(.light) ul:not(.ext) {
    font-family: 'Anton', 'Impact', sans-serif;
    font-size: 30px;
    line-height: 1.35;
  }
  .hl { color: #4a6fe3; }
  section.light strong { color: #70020f; }
---

<!-- _class: title -->

# Developer<br>Starter<br>Pack

<div class="by">


</div>

---

## 1. Code Editor / IDE

<div class="cols">
<div class="col">

<!-- Add VS Code logo: ![w:200](vscode.png) -->
Visual Studio Code<br>
1 - Free<br>
2 - Beginner-friendly

</div>
<div class="col">

<!-- Add JetBrains logo: ![w:200](jetbrains.png) -->
JetBrains IDEs<br>
(PyCharm, IntelliJ, PhpStorm)

</div>
</div>

---

## Best VS Code<br>Extensions

<ul class="ext">
<li><strong>Live Server</strong>Launches a local development server with a live reload feature</li>
<li><strong>Prettier</strong>A code formatter. It automatically cleans up, indents, and structures your code</li>
<li><strong>GitLens</strong>Visualizes code authorship directly inside your files</li>
<li><strong>Todo Tree</strong>Scans your workspace for comment tags like <b>TODO</b> or <b>FIXME</b> and organizes them into a clear tree view so you never forget unfinished tasks</li>
<li><strong>Error Lens</strong>Radically changes how you see mistakes in your code by bringing errors directly to your line of sight rather than hiding them at the bottom of the screen</li>
</ul>

---

<ul class="ext">
<li><strong>Auto Rename Tag</strong>It auto renames the other tag whether it is a closing or opening tag</li>
<li><strong>Auto-Open Markdown Preview</strong>Automatically opens the preview of a Markdown file</li>
<li><strong>Code Runner</strong>Lets you run multiple programming languages in the console by clicking a play button</li>
<li><strong>GitHub Copilot</strong>An AI assistant integrated right in the IDE. It can solve problems or refactor and debug code</li>
</ul>

---

## Version<br>Control

- <span class="hl">Git</span>, the essential tool
- <span class="hl">GitHub account</span> (also works as your portfolio). GitLab is an alternative.
- <span class="hl">GitHub Desktop</span> or the GitLens extension if the command line feels heavy at first

<!-- Add logos: ![w:120](git.png) ![w:100](github.png) -->

---

<!-- _class: light -->

## Browsers and<br>Dev Tools

Chrome or Firefox with DevTools (Elements, Console, Network, Application tabs)
Handy extensions: React DevTools (if you use React later), JSON Viewer, Lighthouse

---

<!-- _class: light -->

## Runtimes and<br>Languages

Install only what you need:
Node.js (LTS), which includes npm
Python 3
PHP, if you're doing PHP work
Java JDK, if you're going the Java or Android route

---

## Local Server and<br>Database

- XAMPP or Laragon gives you Apache, PHP, and MySQL in one install (great for PHP/MySQL projects)
- phpMyAdmin (comes with XAMPP) or DBeaver to manage databases
- MySQL Workbench for visual schema design
- SQLite for quick, lightweight projects

<!-- Add logos: ![w:120](mysql.png) ![w:120](xampp.png) -->