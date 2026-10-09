
# Antigravity: Small Documentation

> Based on my knowledge and public guides. Names, menus, and folders may differ in your lab version, so check them in your lab.

## 1. What is Antigravity?

A development environment built around AI agents. The agents can plan, write code, run commands, and test your work, and you supervise them.


## 3. Workflow

**Plan → Review → Execute → Verify**

1. **Plan**: Ask the agent for a plan first (for example with `/plan`).
2. **Review**: Read the plan and fix it before any file is changed.
3. **Execute**: Let the agent run the work.
4. **Verify**: Test the result yourself.

## 4. Prompt structure

```
Goal: [what to build or fix]
Context: [project, language, framework]
Scope: [where to work, what not to touch]
Constraints: [rules, libraries, style]
Process: Show me a plan first, then wait for my approval.
Done when: [how to check it works]
Output: Summarize your changes briefly.
```

Must have: Goal, Context, Scope, Done condition.

## 5. Rules, Skills

| Feature | Triggered by | Use it for |
|---|---|---|
| Rules | Always on | Standing guidelines and roles |
| Skills | The agent decides | Reusable task expertise |

### Make a rule (role)

File: `.agents/rules/backend-developer.md`

```
You are a senior Laravel backend developer.
- Always show a short plan before changing files.
- Never touch the .env file.
```

### Make a skill

File: `.agents/skills/laravel-crud/SKILL.md`

```
---
name: laravel-crud
description: Builds a full CRUD in Laravel. Use when asked to create a CRUD.
---
# Laravel CRUD
1. Create the migration and the model.
2. Create the controller with validation.
3. Add the routes and the Blade views.
```


### Make the agent use them

```
Read C:/agent-kit/rules/ and follow them.
Use the laravel-crud skill for this task.
```

## 6. MCP

MCP connects the agent to outside tools (GitHub, Google Drive, databases).

1. Open the agent panel, click the **"..."** menu, then **Manage MCP Servers**, then **View raw config**.
2. Add a server inside `mcpServers` in `mcp_config.json`.
3. Save, click **Refresh**, and restart Antigravity if the server doesn't appear.

**Remote server (GitHub):**

```json
{
  "mcpServers": {
    "github": {
      "serverUrl": "https://api.githubcopilot.com/mcp/",
      "headers": { "Authorization": "Bearer YOUR_TOKEN_HERE" }
    }
  }
}
```


## 8. Exercises

1. Small project: build a Todo app.
2. Browser test: test a login form.
3. Parallel agents: frontend and backend at the same time.
4. Fix a bug: find and fix an error you added.