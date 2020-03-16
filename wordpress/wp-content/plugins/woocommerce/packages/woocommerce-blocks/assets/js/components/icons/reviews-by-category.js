/**
 * External dependencies
 */
import { Icon } from '@wordpress/components';

export default ( { className, fillColor } ) => (
	<Icon
		className={ className }
		icon={
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 23">
				<path fill={ fillColor } d="M21.9943 7.0957H2.00638C0.807102 7.0957 -0.0923543 8.0951 0.0075853 9.29437L0.707162 20.3877C0.807102 21.487 1.70656 22.2865 2.70595 22.2865H21.1948C22.2941 22.2865 23.1936 21.487 23.1936 20.3877L23.9931 9.29437C24.093 8.0951 23.0936 7.0957 21.9943 7.0957Z" />
				<path fill={ fillColor } d="M13.0921 2.39855V1.99879C13.0921 0.899456 12.1926 0 11.0933 0H4.7971C3.69777 0 2.79831 0.899456 2.79831 1.99879V5.39674H21.1872V4.49728C21.1872 3.39795 20.2877 2.49849 19.1884 2.49849H13.0921V2.39855Z" />
				<path fill="white" d="M8.63115 17.126L6.5415 15.9449L4.361 17.126L4.72442 14.6729L2.99819 13.0376L5.45125 12.6742L6.5415 10.4937L7.5409 12.6742L9.99396 13.0376L8.26773 14.6729L8.63115 17.126Z" />
				<path fill="white" d="M19.1907 13.5918H12.9899C12.547 13.5918 12.1926 13.1921 12.1926 12.6924C12.1926 12.1927 12.547 11.7929 12.9899 11.7929H19.1907C19.6336 11.7929 19.9879 12.1927 19.9879 12.6924C19.9879 13.1921 19.6336 13.5918 19.1907 13.5918Z" />
				<path fill="white" d="M19.1907 17.1897H12.9899C12.547 17.1897 12.1926 16.7899 12.1926 16.2902C12.1926 15.7905 12.547 15.3907 12.9899 15.3907H19.1907C19.6336 15.3907 19.9879 15.7905 19.9879 16.2902C19.9879 16.7899 19.6336 17.1897 19.1907 17.1897Z" />
			</svg>
		}
	/>
);