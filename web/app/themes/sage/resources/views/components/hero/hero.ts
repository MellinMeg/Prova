import {LitElement, html} from 'lit';

export class Hero extends LitElement {
  // render method is required by LitElement
  render() {
    return html`
      <slot @slotchange=${this.handleSlotChange}></slot>
    `;
  }

  handleSlotChange() {
  }

  connectedCallback() {
    super.connectedCallback();
  }
  
  disconnectedCallback() {
    super.disconnectedCallback();
  }
}

// Define the new custom element only if it's not already defined
if (!customElements.get('app-hero'))
  customElements.define('app-hero', Hero);