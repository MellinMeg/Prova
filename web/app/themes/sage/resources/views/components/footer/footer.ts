import {LitElement, html} from 'lit';

export class Footer extends LitElement {
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
if (!customElements.get('app-footer'))
  customElements.define('app-footer', Footer);