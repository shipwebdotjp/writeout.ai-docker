# [writeout.ai](https://writeout.ai) on Docker

Transcribe and translate audio files using OpenAI's Whisper API.
You can self host [writeout.ai](https://writeout.ai) on Docker.

## Demo

![demo](./backend/docs/writeout-demo.gif)

## How it works

Writeout uses the recently released [OpenAI Whisper](https://platform.openai.com/docs/guides/speech-to-text) API to transcribe audio files.
You can upload any audio file, and the application will send it through the OpenAI Whisper API using Laravel's queued jobs.
Translation makes use of the new [OpenAI Chat API](https://platform.openai.com/docs/guides/code) and chunks the generated VTT file into smaller parts to fit them into 
the prompt context limit.

## Running Locally

### Clone the repository

```bash
git clone https://github.com/shipwebdotjp/writeout.ai-docker.git
```

### Create an OpenAI account and link your API key.

1. Sign up at [OpenAI](https://openai.com/) to create a free account (you'll get $8 credits)
2. Click on the "User" / "API Keys" menu item and create a new API key
3. Configure the `OPENAI_API_KEY` environment variable in your `.env` file

### Create a GitHub OAuth App

1.  Sign in to your GitHub account.
2.  Go to the "Settings" page by clicking on your profile picture in the top-right corner and selecting "Settings" from the dropdown menu.
3.  In the left sidebar, click on "Developer settings."
4.  On the Developer settings page, click on "OAuth Apps" in the left sidebar.
5.  Click on the "New OAuth App" button.

Now, you'll need to provide some details about your OAuth app:

6.  Enter a name for your app in the "Application name" field. Choose a name that describes your app.
    
7.  In the "Homepage URL" field, enter the URL of the homepage or landing page for your app.
    
8.  In the "Authorization callback URL" field, enter the URL where GitHub will redirect users after they authorize your app. This URL should be able to handle the OAuth callback.
    
9.  Optionally, you can enter a description for your app in the "Application description" field.
    
10.  You can also upload an app logo or image by clicking on the "Choose logo" button.
    
11.  In the "User authorization callback URL" section, you can specify additional authorization callback URLs if needed. This is useful if your app has multiple entry points or domains.
    
12.  Choose the appropriate scopes for your app. Scopes determine the level of access your app will have to user data. Select the scopes that are necessary for your app's functionality. For example, if you need read access to a user's repositories, select the "repo" scope.
    
13.  Click on the "Register application" button to create your OAuth app.
    
Once your app is registered, you'll be taken to the app's settings page. Here, you'll find your "Client ID" and "Client Secret," which are necessary for implementing the OAuth flow in your app.

14. Configure the `GITHUB_CLIENT_ID` and `GITHUB_CLIENT_SECRET` environment variable in your `.env` file

### Build and Run
```bash
make init
make yarn
make web
yarn build
```

### You can do it!
Open your browser and enter 'http://localhost/' in the address bar.