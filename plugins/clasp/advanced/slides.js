/**
 * Copyright Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
var presentationId = '1K0Wd9BWgfy1doB0da_vRYmaYTUavEYVKJV_EygSiiMY';
var pageId = 'p';
var shapeId = 'MyTextBoxId';

// [START createPresentation]
/**
 * Create a new presentation.
 */
function createPresentation() {
  var presentation =
      Slides.Presentations.create({'title': 'MyNewPresentation'});
  Logger.log('Created presentation with ID: ' + presentation.presentationId);
}
// [END createPresentation]

// [START createSlide]
/**
 * Create a new slide.
 * @param {string} presentationId The presentation to add the slide to.
 */
function createSlide(presentationId) {
  // You can specify the ID to use for the slide, as long as it's unique.
  var pageId = Utilities.getUuid();

  var requests = [{
    'createSlide': {
      'objectId': pageId,
      'insertionIndex': 1,
      'slideLayoutReference': {
        'predefinedLayout': 'TITLE_AND_TWO_COLUMNS',
      },
    },
  }];
  var slide =
      Slides.Presentations.batchUpdate({'requests': requests}, presentationId);
  Logger.log('Created Slide with ID: ' + slide.replies[0].createSlide.objectId);
}
// [END createSlide]

// [START readPageElementIds]
/**
 * Read page element IDs.
 * @param {string} presentationId The presentation to read from.
 * @param {string} pageId The page to read from.
 */
function readPageElementIds(presentationId, pageId) {
  // You can use a field mask to limit the data the API retrieves
  // in a get request, or what fields are updated in an batchUpdate.
  var response = Slides.Presentations.Pages.get(
      presentationId, pageId, {'fields': 'pageElements.objectId'});
  Logger.log(response);
}
// [END readPageElementIds]

// [START addTextBox]
/**
 * Add a new text box with text to a page.
 * @param {string} presentationId The presentation ID.
 * @param {string} pageId The page ID.
 */
function addTextBox(presentationId, pageId) {
  // You can specify the ID to use for elements you create,
  // as long as the ID is unique.
  var pageElementId = Utilities.getUuid();

  var requests = [{
    'createShape': {
      'objectId': pageElementId,
      'shapeType': 'TEXT_BOX',
      'elementProperties': {
        'pageObjectId': pageId,
        'size': {
          'width': {
            'magnitude': 150,
            'unit': 'PT',
          },
          'height': {
            'magnitude': 50,
            'unit': 'PT',
          },
        },
        'transform': {
          'scaleX': 1,
          'scaleY': 1,
          'translateX': 200,
          'translateY': 100,
          'unit': 'PT',
        },
      },
    },
  }, {
    'insertText': {
      'objectId': pageElementId,
      'text': 'My Added Text Box',
      'insertionIndex': 0,
    },
  }];
  var response =
      Slides.Presentations.batchUpdate({'requests': requests}, presentationId);
  Logger.log('Created Textbox with ID: ' +
      response.replies[0].createShape.objectId);
}
// [END addTextBox]

// [START formatShapeText]
/**
 * Format the text in a shape.
 * @param {string} presentationId The presentation ID.
 * @param {string} shapeId The shape ID.
 */
function formatShapeText(presentationId, shapeId) {
  var requests = [{
    'updateTextStyle': {
      'objectId': shapeId,
      'fields': 'foregroundColor,bold,italic,fontFamily,fontSize,underline',
      'style': {
        'foregroundColor': {
          'opaqueColor': {
            'themeColor': 'ACCENT5',
          },
        },
        'bold': true,
        'italic': true,
        'underline': true,
        'fontFamily': 'Corsiva',
        'fontSize': {
          'magnitude': 18,
          'unit': 'PT',
        },
      },
      'textRange': {
        'type': 'ALL',
      },
    },
  }];
  var response =
      Slides.Presentations.batchUpdate({'requests': requests}, presentationId);
}
// [END formatShapeText]
