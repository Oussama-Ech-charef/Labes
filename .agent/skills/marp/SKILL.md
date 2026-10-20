---
name: marp
description: Create or edit a single Markdown presentation for Marp, using a supplied deck as the visual and structural template when one is provided.
---

# Marp presentations

Use this skill when the requested deliverable is a presentation written in Markdown for Marp or Marpit.

## Reference-first behavior

When the user provides a presentation example, treat it as the source of truth for the result:

- preserve its YAML front matter, theme, slide size, pagination, HTML setting, CSS, colors, typography, and visual rhythm;
- preserve the language, level of detail, section numbering, and order of the example;
- replace or adapt only the subject-specific text, explanations, and code;
- use the example's HTML layout patterns only when they improve the requested deck;
- do not add new slides, sections, or design elements unless the user asks for them or they are required to make the requested content understandable.

If no example is provided, use a simple default deck with `marp: true`, `theme: default`, `size: 16:9`, and `paginate: true`.

## Deliverable boundary

- If the user asks for **only the presentation**, edit or create only the requested `presentation.md`. Do not create a README, introduction, definition, practical lab, index, or other supporting files.
- When an existing deck is present, read it before editing and preserve content that the user did not ask to change.
- Work only inside the user-specified project path.
- Do not modify `.env`, install dependencies, or change project configuration unless explicitly requested.

## Workflow

Follow this sequence for every presentation task:

1. **Inspect the scope:** confirm the working directory, locate the target `presentation.md`, and read any local agent rules that apply.
2. **Read the reference:** if the user pasted or linked an example, extract its front matter, visual system, slide order, language, and content density before writing.
3. **Define the change:** identify whether the request is to create, rewrite, add a section, or only adjust the design. Treat "only presentation" as a strict file boundary.
4. **Plan the deck briefly:** map the requested topic to the reference's existing slides. Reuse the same structure; do not invent a larger lab workflow.
5. **Edit the Markdown:** preserve untouched slides and directives, keep code examples concise, and add only the requested content.
6. **Verify the result:** check front matter, slide separators, code fences, links, HTML blocks, and that the output contains no unrequested files.
7. **Report clearly:** state the file changed, the main content or style changes, validation performed, and any unavailable preview tool.

## Content workflow

1. Identify the audience, learning objectives, requested language, and presentation length.
2. Follow the user's example structure first. If there is no structure, use: definition, architecture or core concepts, tools, one concrete example, benefits and use cases, recap, and sources when appropriate.
3. For educational decks, include a short **Plan** or **Sommaire** slide immediately after the title unless the user explicitly asks for a shorter deck or the reference example omits it. Keep it to 4–7 items and synchronize it with the actual slide order.
4. Keep one clear message per slide and prefer short bullets over paragraphs.
5. Keep code examples short, syntactically coherent, and relevant to the subject. For Laravel, show the relationship between route, controller, model, database, and Blade view when that is part of the requested topic.
6. Use official documentation for technical claims. Do not invent framework behavior or present version-specific details without checking the relevant version.
7. Keep the requested language consistent; preserve API names, commands, class names, and code syntax.

## Marp syntax

- Begin the deck with valid YAML front matter containing `marp: true`.
- Separate slides with `---` on its own line.
- Use a built-in theme or preserve the theme from the user's example.
- Use `style: |` for local CSS. Use inline HTML only when `html: true` is enabled or already present in the reference deck.
- Avoid overcrowding slides. If the reference uses tables, cards, or HTML blocks, keep the same density and spacing.

## Quality checks

- Confirm the front matter is valid and the intended slide separators are present.
- Check that Markdown links, HTML tags, and fenced code blocks are balanced.
- Confirm the deck contains the requested sections and no unrequested deliverables.
- Preview with the Marp VS Code extension or, when Marp CLI is already available, run:

```bash
npx --no-install @marp-team/marp-cli presentation.md --html
```

- Never install Marp or other dependencies merely to validate a deck; report when preview tooling is unavailable.

