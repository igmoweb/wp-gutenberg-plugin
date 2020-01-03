const { helpers, externals } = require('@humanmade/webpack-helpers');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const { filePath } = helpers;
const SystemBellPlugin = require('system-bell-webpack-plugin');

module.exports = {
	externals,
	entry: {
		editor: filePath('src/editor.js'),
		front: filePath('src/front.js'),
	},
	output: {
		path: filePath('dist'),
	},
	plugins: [new CleanWebpackPlugin(), new SystemBellPlugin()],
};
