---
name: lab-creator
description: Creates organized educational labs in separate subdirectories, following a consistent structure of introduction, definition, and practical exercises.
---

# Lab Creator Skill

## Purpose
Create well-organized educational labs in the repository. Each lab must focus on one specific subject and be stored in its own subdirectory.

## Rules
1. Create every lab inside the `labs/` directory.
2. Give each lab a unique, numbered directory name using this format: `lab-01-subject-name`.
3. Each lab must contain the following Markdown files:
   * `README.md`
   * `introduction.md`
   * `definition.md`
   * `practical.md`
   * `presentation.md`
4. Write content in clear, simple English unless another language is requested.
5. Keep explanations concise, accurate, and suitable for students.
6. Do not invent technical facts or present unverified information as fact.
7. Avoid duplicating existing labs. Inspect the repository before creating a new lab.
8. Preserve existing files and never overwrite user content without permission.

## Lab Structure

### 1. Introduction
* Introduce the subject.
* Explain its purpose and importance.
* Present the learning objectives.

### 2. Definition
* Define the subject and its key concepts.
* Explain important terminology.
* Include examples when useful.
* Distinguish related concepts clearly.

### 3. Practical
* Provide step-by-step instructions.
* Include practical exercises related to the subject.
* Give expected results.
* Include a challenge exercise when appropriate.
* Provide solutions separately when requested.

### 4. Presentation
* Create a `presentation.md` for the lab.
* The presentation should summarize the key concepts of the lab.
* Use a presentation-friendly format (e.g., Marp directives).

## README.md Requirements
The lab README must include:
* Lab title and number.
* Subject.
* Learning objectives.
* Links to `introduction.md`, `definition.md`, `practical.md`, and `presentation.md`.

## Main Repository README
Maintain the root `labs/README.md` as an index of all labs. Include each lab's number, subject, short description, and link to its directory README.

## Workflow
1. Inspect the repository and existing labs.
2. Identify the subject requested by the user.
3. Select the next available lab number.
4. Create the lab directory and required files.
5. Write the introduction, definition, practical, and presentation sections.
6. Update the main lab index.
7. Verify that all files exist and all relative links work.
8. Summarize the files created and any checks performed.

## Important
Create actual files in the repository rather than only displaying their contents in the chat. If the subject is missing, ask the user which subject the lab should cover.
