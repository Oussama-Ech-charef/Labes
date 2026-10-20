# Practical: Build Your Starter Workspace

## Goal

Create a tiny web project, serve it locally, inspect it in the browser, and record the work with Git. The exercise uses plain HTML and JavaScript so that no project dependency is required.

## Prerequisites

- a code editor or IDE;
- a browser with developer tools;
- Git installed and configured with your name and email;
- either a local server extension or a simple local server already available on your computer.

Do not install every tool from the presentation. Use the smallest setup that completes the exercise.

## Step 1: Create the workspace

Create a folder named `developer-starter-pack` and add two files:

`index.html`

```html
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Developer Starter Pack</title>
  </head>
  <body>
    <h1>My starter workspace</h1>
    <button id="check-button">Check the setup</button>
    <p id="status">Not checked yet.</p>
    <script src="app.js"></script>
  </body>
</html>
```

`app.js`

```js
const button = document.querySelector('#check-button');
const status = document.querySelector('#status');

button.addEventListener('click', () => {
  status.textContent = 'The browser loaded the project and JavaScript is running.';
});
```

## Step 2: Run the project

Start a local server for the folder and open `index.html` through the server address. Do not rely on a `file://` URL for this exercise: a local server better represents how a browser loads a web project.

Expected result: the page shows the heading, the button, and the message `Not checked yet.`

## Step 3: Inspect the project

Open the browser developer tools and complete these checks:

1. In **Elements**, find the button and the status paragraph.
2. In **Console**, confirm that no error is shown after loading the page.
3. Click the button and verify that the status changes.
4. In **Network**, reload the page and confirm that `index.html` and `app.js` are requested successfully.

## Step 4: Save the work with Git

Run these commands from the project folder:

```bash
git init
git status
git add index.html app.js
git commit -m "Create developer starter workspace"
git log --oneline -1
```

Expected result: Git reports a clean working tree after the commit, and the last log entry has the message shown above.

## Step 5: Write your setup checklist

Create `SETUP.md` and answer these questions in your own words:

- Which editor or IDE did you use, and what did it help you do?
- Which browser panels did you use?
- Which runtime or local server did the project need?
- What does Git record in this exercise?
- Which tool would you remove if the project did not need it?

Commit the checklist as a second, separate commit.

## Challenge

Add a small `style.css` file and connect it to the page. Then use the Network panel to verify that the stylesheet loads successfully. Make a third Git commit with a message that describes the change.

## Completion checklist

- [ ] The project opens through a local server.
- [ ] The button updates the page without a console error.
- [ ] The browser Network panel shows successful file requests.
- [ ] The initial files are stored in a Git commit.
- [ ] `SETUP.md` explains the purpose of the tools you used.
