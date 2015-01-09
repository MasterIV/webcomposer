# webcomposer
Installer Tool that can install software from GitHub repositorys without having access to a CLI. This tool should evaluete the composer.json to automatically install dependencies. The JsonP api of GitHub should be used to retrieve the required data and be posted to a php file, so that not even url_fopen is required. The only thing to keep in mind is the maximum upload filesize. So it should basically run on every webspace. 

The installer should also be able to update an existing installation. The update functionallity should work standalone but it should also be possible to include it in a backend. For the standalone update, the user needs to specify a password to access the updater.
