# Practical Exercise

In this practical exercise, you will create a simple Marp presentation.

## Prerequisites
* A text editor (VS Code is recommended with the "Marp for VS Code" extension installed).
* If using the command line, you need Node.js installed to use the Marp CLI via `npx`.

## Step-by-Step Instructions

### Step 1: Create a new file
Create a new file named `presentation.md` in your workspace.

### Step 2: Add Frontmatter
At the very top of `presentation.md`, add the YAML frontmatter to enable Marp and set a theme.

```yaml
---
marp: true
theme: default
---
```

### Step 3: Write your first slide
Directly below the frontmatter, write the title of your presentation.

```markdown
# Welcome to Marp
My first presentation using Markdown!
```

### Step 4: Add a new slide
Use the slide separator `---` to create a second slide, and add some content.

```markdown
---
## Why Marp?
* It's easy to use.
* Version control friendly.
* Focus on content, not formatting.
```

### Step 5: Preview the presentation
* **If using VS Code:** Click the Marp icon in the top right corner (or use the command palette `Marp: Toggle Marp Preview`) to see your slides.
* **If using Marp CLI:** Run the following command in your terminal to create an HTML file:
  `npx @marp-team/marp-cli@latest presentation.md`

## Expected Results
You should see a two-slide presentation. The first slide will have the title "Welcome to Marp", and the second slide will have the heading "Why Marp?" with a bulleted list.

## Challenge
Modify the `presentation.md` to:
1. Use the `gaia` theme instead of `default`.
2. Add a third slide.
3. Change the background color of the third slide using a local directive `<!-- backgroundColor: lightblue -->`.
