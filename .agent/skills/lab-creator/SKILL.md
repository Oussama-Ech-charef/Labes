---
name: lab-creator
description: Creates or updates focused educational labs with a clear problem, practical solution plan, justified technologies, verifiable deliverables, and a consistent course structure.
---

# Lab Creator Skill

## Purpose

Create or update one focused educational lab in the repository. Each lab starts from a concrete need, states the problem separately from the work to do, chooses only relevant technologies, defines a deliverable and observable validation criteria, then teaches the subject from definitions to a first working result and self-study.

## Rules

1. Inspect the repository before creating or editing a lab.
2. If the user names an existing lab directory, work in that directory and preserve its local naming convention. Do not create a duplicate lab elsewhere.
3. For a new lab, use the repository's designated labs directory and a unique numbered directory such as `lab-01-subject-name`.
4. Preserve existing user content unless the requested lab update requires changing it.
5. Write in the requested language. If no language is specified, use clear, simple English.
6. Keep explanations concise, accurate, and suitable for students.
7. Do not invent technical facts. Use official documentation for commands, versions, and framework behavior when those details matter.
8. A completed lab must not leave instructional placeholders such as subject tokens, command tokens, or completion prompts.
9. Keep the lab focused on one achievable learning objective. Do not require the entire application stack when only part of it is needed.

## Lab planning template

Before writing the teaching material, define the lab using these fields. Include them in the README or the most appropriate existing planning section so learners and reviewers can find them easily:

1. **Need:** who needs what in the context of the project or blog?
2. **Problem:** what is missing or not working? Describe the difficulty without prescribing its implementation.
3. **Work to do / solution:** list the concrete steps the learner will perform to address the problem.
4. **Technologies:** name the tools, languages, libraries, or stack parts to use, test, or evaluate, and explain why each is relevant. Add a technology only when it supports the objective.
5. **Deliverable:** state what the learner must produce.
6. **Validation:** define observable results or checks that demonstrate the problem is solved.

Keep the distinction explicit: the **problem** describes what needs solving; the **work to do** describes the learner's implementation steps. Do not turn the problem statement into a hidden solution.

### Example planning brief

- **Need:** readers want to react to a blog article.
- **Problem:** readers cannot publish a comment under an article.
- **Work to do:** add a form, validate the input, save the comment for the correct article, and show it after submission.
- **Technologies:** Laravel and MySQL for processing and storage; Blade and Tailwind CSS for the form. Add JavaScript only if the exercise requires browser-side interaction.
- **Deliverable:** a working comment form and its server-side handling.
- **Validation:** a valid comment is saved for the correct article, empty input is rejected with a clear message, and the published comment appears on the page.

## Standard course plan

Every lab must follow this progression after its planning brief:

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
3. Write the planning brief: need, problem, work to do, technologies with reasons, deliverable, and validation criteria.
4. Check that the problem is not overbroad, the work is actionable, and every selected technology supports the objective.
5. Map the subject to the four parts of the standard course plan.
6. Create or update the required lab files without duplicating existing content; place the planning brief in the README or an established planning section.
7. Verify that the content is concrete and that no placeholders remain in a completed lab.
8. Verify all relative links, Markdown code fences, and Marp front matter.
9. Update the repository lab index only when the repository has one and the user asks for an index update.
10. Summarize changed files and checks performed.

## Important

Create actual files in the repository rather than only displaying their contents in chat. If the subject is missing, ask which subject the lab should cover.
