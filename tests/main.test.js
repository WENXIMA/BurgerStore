import { fireEvent, getByText } from '@testing-library/dom'
import '@testing-library/jest-dom/extend-expect'
import { JSDOM } from 'jsdom';

describe('index.html', () => {
  beforeEach(() => {
    // Constructing a new JSDOM with this option is the key
    // to getting the code in the script tag to execute.
    // This is indeed dangerous and should only be done with trusted content.
    // https://github.com/jsdom/jsdom#executing-scripts
    dom = new JSDOM(html, { runScripts: 'dangerously' })
    container = dom.window.document.body
  })

  it('does some test', () => {
    assert(true);
    expect(true);
  })
})