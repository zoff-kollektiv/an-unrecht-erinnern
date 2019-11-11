import { registerFormatType, toggleFormat } from "@wordpress/rich-text";
import { RichTextToolbarButton } from "@wordpress/block-editor";

const TooltipButton = ({ onChange, value, isActive }) => (
  <RichTextToolbarButton
    icon="info"
    title="Tooltip"
    onClick={() => {
      onChange(toggleFormat(value, { type: "unrecht/tooltip" }));
    }}
    isActive={isActive}
  />
);

registerFormatType("unrecht/tooltip", {
  title: "Tooltip",
  tagName: "button",
  className: "tooltip js-tooltip",
  edit: TooltipButton
});
