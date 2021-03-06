(function(wp){
  const { __ } = wp.i18n
  const { registerBlockType } = wp.blocks
  const ServerSideRender = wp.serverSideRender;
  const { PanelBody, BaseControl, CheckboxControl } = wp.components;
  const { Fragment } = wp.element;
  const { InspectorControls } = wp.blockEditor;
  const React = wp.element
  const BlockIcon = (
	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M10.8895 14.7778L7.62346 14.7854C7.57942 14.7854 7.53538 14.8158 7.5207 14.8614L7.27116 15.5832C7.24915 15.6592 7.30052 15.7352 7.37392 15.7352H8.64364C8.73905 15.7352 8.79043 15.8567 8.72437 15.9251L6.69869 18.1058H6.70603L7.74823 21.5021C7.77025 21.578 7.71887 21.6464 7.64548 21.6464H6.62529C6.57392 21.6464 6.53722 21.616 6.52254 21.5704L6.00144 19.8305C5.97208 19.7241 5.83264 19.7241 5.79594 19.8229L5.37025 21.0462C5.36291 21.069 5.36291 21.0918 5.37025 21.1146L5.75924 22.5962C5.77392 22.6418 5.81796 22.6797 5.86199 22.6797H9.15006C9.22345 22.6797 9.27483 22.6038 9.25281 22.5354L7.92437 18.2577C7.90969 18.2197 7.92437 18.1741 7.95373 18.1437L10.9702 14.9678C11.0363 14.8994 10.9849 14.7778 10.8895 14.7778Z" fill="black"/>
	<path d="M7.02164 13L5.03265 13.0076C4.98862 13.0076 4.94458 13.038 4.9299 13.0836L4.67302 13.8054C4.64366 13.8814 4.70238 13.9573 4.77577 13.9573H5.61247C5.68586 13.9573 5.73724 14.0333 5.71522 14.1093L3.34458 20.8259C3.30789 20.9247 3.17578 20.9247 3.13908 20.8259L1.43633 15.9784C1.40697 15.9024 1.46569 15.8265 1.53908 15.8265H2.3978C2.44183 15.8265 2.48587 15.8568 2.50055 15.9024L3.11706 17.65C3.15376 17.7487 3.28587 17.7487 3.32257 17.65L4.27669 14.9299C4.30605 14.8539 4.24733 14.7779 4.17394 14.7779H0.107895C0.0345005 14.7779 -0.0168755 14.8539 0.0051428 14.9299L3.13174 23.9259C3.16844 24.0247 3.30055 24.0247 3.33724 23.9259L7.12439 13.152C7.14641 13.076 7.09503 13 7.02164 13Z" fill="#D8141C"/>
	<path fill-rule="evenodd" clip-rule="evenodd" d="M7 0H10.5C11.05 0 11.5 0.45 11.5 1C11.5 2.25 11.7 3.45 12.07 4.57C12.18 4.92 12.1 5.31 11.82 5.59L9.62 7.79C11.06 10.62 13.38 12.93 16.21 14.38L18.41 12.18C18.61 11.99 18.86 11.89 19.12 11.89C19.22 11.89 19.33 11.9 19.43 11.94C20.55 12.31 21.76 12.51 23 12.51C23.55 12.51 24 12.96 24 13.51V17C24 17.55 23.55 18 23 18C18.98 18 15.2862 16.6052 12.3762 14.2731C12.1893 13.8229 11.8056 13.4545 11.2918 13.3264C8.0321 10.2292 6 5.85228 6 1C6 0.45 6.45 0 7 0Z" fill="black"/>
	</svg>
  );

  registerBlockType("vk-blocks/contact-section", {
    title: __("Contact section", "veu-block"),
    icon: BlockIcon,
	category: "veu-block",
	attributes: {
        vertical: {
            type: "boolean",
			default: false,
        },
    },
    edit: ( props ) => {
		const { attributes, setAttributes, className } = props;
		const { vertical } = attributes;

      return (
        <Fragment>
			<InspectorControls>
				<PanelBody
					title={__("Display conditions", "veu-block")}
					initialOpen={false}
				>
					<BaseControl >
						<CheckboxControl
							label={__("Set telephone and mail form vertically", "veu-block")}
							className={ "mb-1" }
							checked={ vertical }
							onChange={ (checked) => setAttributes({ vertical: checked }) }
						/>
					</BaseControl>
				</PanelBody>
			</InspectorControls>
			<div className='veu_contact_section_block'>
				<ServerSideRender
				block="vk-blocks/contact-section"
				attributes={ props.attributes }
				/>
          	</div>
        </Fragment>
      )
    },
    save: () => null
  });
})(wp)
