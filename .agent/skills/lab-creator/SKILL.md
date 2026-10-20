---
name: lab-creator
description: Creates or updates organized educational labs with a consistent course plan: definitions, installation and quick start, first exercise, and self-study.
---

# Lab Creator Skill

## Purpose

Create or update one focused educational lab in the repository. A completed lab must teach a subject from definitions to a first working result and then guide the learner toward self-study.

## Rules

1. Inspect the repository before creating or editing a lab.
2. If the user names an existing lab directory, work in that directory and preserve its local naming convention. Do not create a duplicate lab elsewhere.
3. For a new lab, use the repository's designated labs directory and a unique numbered directory such as `lab-01-subject-name`.
4. Preserve existing user content unless the requested lab update requires changing it.
5. Write in the requested language. If no language is specified, use clear, simple English.
6. Keep explanations concise, accurate, and suitable for students.
7. Do not invent technical facts. Use official documentation for commands, versions, and framework behavior when those details matter.
8. A completed lab must not leave instructional placeholders such as subject tokens, command tokens, or completion prompts.

## Standard course plan

Every lab must follow this progression:

### 1. Définitions

- Explain what the subject is and why it matters.
- Define the key terms and concepts.
- Describe the general functioning or workflow.
- Distinguish related concepts that beginners may confuse.

### 2. Installation et démarrage

- List the prerequisites and the role of each tool.
- Give installation or setup instructions.
- Include commands to verify the environment.
- Explain how to create and start a first project or example.

### 3. Premier résultat / Hello World

- Provide one small, visible, reproducible exercise.
- Show the essential files or commands.
- State the expected result and how to verify it.

### 4. Autoformation

- Link to relevant official documentation.
- Give guided questions for independent research.
- Add a challenge that extends the first exercise.
- Ask the learner to document the steps, result, and what was learned.

## Required lab files

For new labs, use these files unless the repository already has another established convention:

* `README.md`
* `1-introduction.md`
* `2-definition.md`
* `3-presentation.md`
* `4-practical.md`

### File numbering convention

Keep the numeric order consistent in every new lab:

1. `1-introduction.md` — introduce the subject and learning objectives;
2. `2-definition.md` — explain definitions, concepts, and functioning;
3. `3-presentation.md` — summarize the lab in Marp slides;
4. `4-practical.md` — cover installation, Hello World, exercises, and self-study.

Do not use a different number for the same section, and do not create duplicate files such as both `practical.md` and `4-practical.md` unless the user explicitly requests compatibility files.

The README must include the lab title, subject, learning objectives, course-plan summary, and working links to all four files. Existing labs may use unnumbered names, but links must match the actual filenames.

## Presentation requirements

The presentation must summarize the same course plan as the written lab:

1. Définitions
2. Installation et outils
3. Premier résultat
4. Autoformation

Use valid Marp front matter, one clear message per slide, balanced code fences, and no links to missing files.

## Workflow

1. Inspect the repository, existing labs, local rules, and the target directory.
2. Identify the subject, learner level, language, and requested scope.
3. Map the subject to the four parts of the standard course plan.
4. Create or update the required lab files without duplicating existing content.
5. Verify that the content is concrete and that no placeholders remain in a completed lab.
6. Verify all relative links, Markdown code fences, and Marp front matter.
7. Update the repository lab index only when the repository has one and the user asks for an index update.
8. Summarize changed files and checks performed.

## Important

Create actual files in the repository rather than only displaying their contents in chat. If the subject is missing, ask which subject the lab should cover.
