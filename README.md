# Codespaces Template for Laravel Packages

## Services and Helpers
- [OhMyZsh](https://ohmyz.sh), with plugins:
  - git
  - zsh-artisan
  - zsh-autosuggestions
  - zsh-you-should-use
  - zsh-syntax-highlighting
  - zsh-completions
- [Git Hubflow](https://datasift.github.io/gitflow/)

## Setup
### Codespace
1. Make sure you are signing commits on this (or all, if you don't want to keep
  updating the setting) repositories, follow this guide:
  https://docs.github.com/en/codespaces/managing-your-codespaces/managing-gpg-verification-for-github-codespaces
2. Downloand and install the recommended fonts on your system:
    - [MesloLGS NF Regular.ttf](https://github.com/romkatv/powerlevel10k-media/raw/master/MesloLGS%20NF%20Regular.ttf)
    - [MesloLGS NF Bold.ttf](https://github.com/romkatv/powerlevel10k-media/raw/master/MesloLGS%20NF%20Bold.ttf)
    - [MesloLGS NF Italic.ttf](https://github.com/romkatv/powerlevel10k-media/raw/master/MesloLGS%20NF%20Italic.ttf)
    - [MesloLGS NF Bold Italic.ttf](https://github.com/romkatv/powerlevel10k-media/raw/master/MesloLGS%20NF%20Bold%20Italic.ttf)
3. Create your codespace.
4. Run `composer update`.
5. You will be prompted for a GitHub access token, be sure to use the link for
  private repositories.

### Repository
1. Configure Codecov by adding your CODECOV_TOKEN to your repository codespace
  secrets. You can obtain your token here:
  `https://app.codecov.io/gh/<github owner>/<github repo>/settings`
2. Set up a `develop` branch to where your pull requests will be merged.
  Configure the develop branch to be the primary branch for the repo, that way
  new PRs will automatically be based on it.
3. Initialize repo to use Git Hubflow: `g hf init`.
