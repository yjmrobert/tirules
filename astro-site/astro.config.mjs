// @ts-check
import { defineConfig } from 'astro/config';
import starlight from '@astrojs/starlight';

// https://astro.build/config
export default defineConfig({
	site: 'https://yjmrobert.com',
	base: '/tirules',
	integrations: [
		starlight({
			title: 'Twilight Imperium 4 Rules',
			social: [{ icon: 'github', label: 'GitHub', href: 'https://github.com/bradleysigma/tirules' }],
			customCss: [
				'./src/styles/custom.css',
			],
			sidebar: [
				{
					label: 'Rules',
					autogenerate: { directory: 'rules' },
				},
				{
					label: 'Factions',
					autogenerate: { directory: 'factions' },
				},
				{
					label: 'Components',
					autogenerate: { directory: 'components' },
				},
			],
		}),
	],
});
