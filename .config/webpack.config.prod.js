const { helpers, externals, presets } = require( '@humanmade/webpack-helpers' );
const { filePath } = helpers;
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const SystemBellPlugin = require('system-bell-webpack-plugin');

module.exports = presets.production( {
  externals,
  entry: {
    editor: filePath( 'src/index.js' ),
  },
  output: {
    path: filePath( 'dist' ),
  },
  plugins: [
    new CleanWebpackPlugin(),new SystemBellPlugin()
  ]
} );
