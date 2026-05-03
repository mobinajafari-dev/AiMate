# 🤖 AiMate

[![GitHub Repo](https://img.shields.io/badge/GitHub-Repository-blue?logo=github)](https://github.com/mobinajafari-dev/AiMate)

**AiMate** is a cross-platform Progressive Web Application (PWA) designed to act as your all-in-one, intelligent AI assistant. It provides a seamless conversational experience across multiple interfaces, including a web app, voice assistant, and a Telegram bot—all powered by advanced AI models and a unified, secure backend.

## ✨ Key Features

- 💬 **Unified Chat Interface**: Integrates with cutting-edge AI APIs (OpenAI / Deepseek) for a smart conversational experience.
- 📱 **PWA Ready**: Installable on mobile devices, offering a native app-like, mobile-first user interface.
- 🎙️ **Voice Assistant**: Built-in Speech-to-Text (STT) and Text-to-Speech (TTS) capabilities for hands-free interactions.
- ✈️ **Telegram Bot Sync**: Chat with your AI assistant on the go via Telegram, perfectly synced with the unified backend.
- 🔒 **Secure Backend**: robust server-side logic handling API key management, rate limiting, and secure communication.

## 🛠️ Tech Stack

**Frontend**

- **React.js**: UI development.
- **Zustand**: Lightweight state management.
- **Bootstrap CSS**: Mobile-first, responsive design.
- **Web Speech API**: Native browser STT/TTS implementation.

**Backend & Infrastructure**

- **PHP**: Core backend logic and API endpoints.
- **cURL / Guzzle**: Handling external API requests.
- **MySQL**: Persistent data storage.
- **Redis**: Session management and rate-limiting.

## 📂 Documentation & Setup

Because AiMate features a multi-component architecture (Frontend, Backend, Telegram Bot), detailed setup instructions are organized in the `docs/` folder.

Please refer to the following guides to get started:

- 🏛️ [System Architecture](./docs/ARCHITECTURE.md) - _Overview of how components interact._
- 🖥️ [Frontend Setup Guide](./docs/FRONTEND_SETUP.md) - _Instructions for React and PWA._
- ⚙️ [Backend Setup Guide](./docs/BACKEND_SETUP.md) - _Instructions for PHP, MySQL, and Redis._
- 🤖 [Telegram Bot Configuration](./docs/TELEGRAM_BOT.md) - _How to set up and connect the bot webhook._

## 🚀 Quick Start

1. **Clone the repository:**
   ```bash
   git clone https://github.com/mobinajafari-dev/AiMate.git
   cd AiMate
   ```
2. Check the `docs/` folder to set up the respective environments (Frontend and Backend).

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://github.com/mobinajafari-dev/AiMate/issues).

## 📝 License

This project is licensed under the MIT License.

```

```
