# Definition

## What is Marp?
Marp stands for Markdown Presentation Ecosystem. It is a set of tools that provides a simple, intuitive, and standard way to create slide decks from Markdown documents. 

## Key Concepts

### 1. Marp Markdown
Marp extends standard Markdown syntax with a few special features called **Directives**. Directives are instructions that tell Marp how to format the slides. They are usually placed within an HTML comment or in the YAML frontmatter at the top of the file.

### 2. Frontmatter
The YAML frontmatter is a block at the very top of your Markdown file enclosed by `---`. To enable Marp, you must include `marp: true` in this section.
```yaml
---
marp: true
theme: default
---
```

### 3. Paging (Slide Separator)
To separate one slide from the next, you use a horizontal rule `---` (three hyphens) preceded and followed by a blank line.

### 4. Directives
Directives control things like pagination, themes, and styling.
* **Global directives**: Affect the whole presentation (e.g., `theme`, `size`).
* **Local directives**: Affect only the current slide and the slides that follow (e.g., `backgroundColor`, `color`).

### Related Concepts
* **Markdown**: A lightweight markup language for creating formatted text using a plain-text editor. Marp uses Markdown as its foundation.
* **Marp CLI**: A command-line interface tool to convert Marp Markdown files into PDF, HTML, or PowerPoint files.
* **Marp for VS Code**: An extension that allows you to preview Marp slides directly in your editor.
