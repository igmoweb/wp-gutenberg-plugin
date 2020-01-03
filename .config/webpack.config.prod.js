const { externals, presets } = require('@humanmade/webpack-helpers');
const baseConfig = require('./webpack.config.base');

module.exports = presets.production({
	...baseConfig,
	externals,
	performance: {
		hints: 'warning',
	},
});
