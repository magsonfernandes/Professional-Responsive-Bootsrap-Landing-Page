# Aura — Speaking & Chatting Assistant

A lightweight browser-based assistant with text chat, speech input/output, and explicit user-controlled memory.

## Important behavior
- Memories and settings are stored in this browser's localStorage. They are not uploaded to a server.
- "Self-learning" here means Aura can use facts/preferences you explicitly save. It does **not** train or modify an AI model.
- Without a local model, Aura uses a small offline fallback and is not a full generative AI.
- To enable generative answers without an OpenAI API key, run [Ollama](https://ollama.com/) on your own computer, download a model (for example `ollama pull llama3.2`), and configure the local endpoint in Settings. Browser-to-localhost access and CORS policy may need configuration.
- Microphone recognition requires browser support and permission. Speech output uses the browser's speech synthesis.

## Deploy
This is a static site and can be deployed to Vercel as-is. No secrets or API keys are required.

## Privacy
This starter has no login, cloud sync, Gmail access, or remote model backend. Do not use a shared browser if saved memories are sensitive. Use "Forget all" to clear saved memory.
