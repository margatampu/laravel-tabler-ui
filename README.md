Recommended to new fresh laravel project

1. Run npm installation

    > npm install

2. Install package dependencies for tabler-ui

    > npm install --save-dev tabler-ui bootstrap-sass font-awesome selectize

3. Copy and paste folder on zipped files. Replace existing files and merge existing folders

4. Open node_modules/tabler_ui/src/assets/scss/bundle.scss
   Change
   @import '../../../node_modules/bootstrap/scss/bootstrap.scss';

To:
@import '../../../../bootstrap/scss/bootstrap.scss';

5. Run npm dev
    > npm run dev
