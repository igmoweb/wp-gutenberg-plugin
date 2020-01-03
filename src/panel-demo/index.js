const { registerPlugin } = wp.plugins;
const { PluginDocumentSettingPanel } = wp.editPost;

const PluginDocumentSettingPanelDemo = () => (
	<PluginDocumentSettingPanel
		name="custom-setting-panel"
		title="Custom Panels"
		className="custom-panel"
	>
		Custom WP Gutenberg Plugin Panel Content
	</PluginDocumentSettingPanel>
);

registerPlugin('wp-gp-panel-demo', {
	render: PluginDocumentSettingPanelDemo,
	icon: 'palmtree',
});
