const { helpers, externals, presets } = require('@humanmade/webpack-helpers');
const { choosePort } = helpers;
const baseConfig = require('./webpack.config.base');

const config = choosePort(9090).then((port) =>
	presets.development({
		...baseConfig,
		devServer: {
			port,
		},
		externals,
		output: {
			...baseConfig.output,
			publicPath: `http://localhost:${port}/dist/`,
		},
	}),
);

module.exports = config;
