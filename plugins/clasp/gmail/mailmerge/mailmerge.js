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

// [START mail_merge]
/**
 * Sends emails from spreadsheet rows.
 */
function sendEmails() {
  var ss = SpreadsheetApp.getActiveSpreadsheet();
  var dataSheet = ss.getSheets()[0];
  // [START dataRange]
  var dataRange = dataSheet.getRange(2, 1, dataSheet.getMaxRows() - 1, 4);
  // [END dataRange]

  // [START template]
  var templateSheet = ss.getSheets()[1];
  var emailTemplate = templateSheet.getRange('A1').getValue();
  // [END template]

  // [START objects]
  // Create one JavaScript object per row of data.
  var objects = getRowsData(dataSheet, dataRange);
  // [END objects]

  // For every row object, create a personalized email from a template and send
  // it to the appropriate person.
  for (var i = 0; i < objects.length; ++i) {
    // Get a row object
    var rowData = objects[i];

    // [START emailText]
    // Generate a personalized email.
    // Given a template string, replace markers (for instance ${"First Name"}) with
    // the corresponding value in a row object (for instance rowData.firstName).
    var emailText = fillInTemplateFromObject(emailTemplate, rowData);
    // [END emailText]
    var emailSubject = 'Tutorial: Simple Mail Merge';

    // [START sendEmail]
    MailApp.sendEmail(rowData.emailAddress, emailSubject, emailText);
    // [END sendEmail]
  }
}

/**
 * Replaces markers in a template string with values define in a JavaScript data object.
 * @param {string} template Contains markers, for instance ${"Column name"}
 * @param {object} data values to that will replace markers.
 *   For instance data.columnName will replace marker ${"Column name"}
 * @return {string} A string without markers. If no data is found to replace a marker,
 *   it is simply removed.
 */
function fillInTemplateFromObject(template, data) {
  var email = template;
  // [START templateVars]
  // Search for all the variables to be replaced, for instance ${"Column name"}
  var templateVars = template.match(/\$\{\"[^\"]+\"\}/g);
  // [END templateVars]

  // Replace variables from the template with the actual values from the data object.
  // If no value is available, replace with the empty string.
  for (var i = 0; i < templateVars.length; ++i) {
    // normalizeHeader ignores ${"} so we can call it directly here.
    // [START variableData]
    var variableData = data[normalizeHeader(templateVars[i])];
    // [END variableData]
    // [START replace]
    email = email.replace(templateVars[i], variableData || '');
    // [END replace]
  }

  return email;
}
// [END mail_merge]
