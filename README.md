# mirth_client_test_module
a module that can be used to test the [redcap_mirth_client module](https://github.com/ctsit/redcap_mirth_client). It allows the user to create and send API calls to the Mirth Connect REST API.

## Prerequisites
- [REDCap Modules](https://github.com/vanderbilt/redcap-external-modules)
- [redcap_mirth_client module](https://github.com/ctsit/redcap_mirth_client) is installed and enabled in the same project this module is used in.
- A working Mirth Connect instance to send requests to.

## Installation
- Clone this repo into `redcap-root>/modules/mirth_client_test_module_v1.0`;
- Go to **Control Center > Manage External Modules** and enable REDCap Mirth Connect Client

## Usage
Go to the **Test Mirth Client Module** page under **External Modules**. Fill in the form and hit the submit button to send off your API request. You can see the results by going to the **Mirth Logs** page under **External Modules**

![Screenshot of the form this module provides](/img/form.png)
