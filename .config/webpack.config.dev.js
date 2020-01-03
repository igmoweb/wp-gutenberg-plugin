const {
	helpers,
	externals,
	presets,
} = require('@humanmade/webpack-helpers');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const { choosePort, filePath } = helpers;
const SystemBellPlugin = require('system-bell-webpack-plugin');

const config = choosePort(9090).then((port) => {
	const config = presets.development({
		devServer: {
			port,
		},
		externals,
		entry: {
			editor: filePath('src/index.js'),
		},
		output: {
			path: filePath('dist'),
			publicPath: `http://localhost:${port}/dist/`,
		},
		plugins: [new CleanWebpackPlugin(), new SystemBellPlugin()],
	});
	return config;
});

module.exports = config;
