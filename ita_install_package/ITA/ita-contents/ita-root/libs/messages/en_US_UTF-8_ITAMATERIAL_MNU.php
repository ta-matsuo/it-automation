<?php
//   Copyright 2019 NEC Corporation
//
//   Licensed under the Apache License, Version 2.0 (the "License");
//   you may not use this file except in compliance with the License.
//   You may obtain a copy of the License at
//
//       http://www.apache.org/licenses/LICENSE-2.0
//
//   Unless required by applicable law or agreed to in writing, software
//   distributed under the License is distributed on an "AS IS" BASIS,
//   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//   See the License for the specific language governing permissions and
//   limitations under the License.
//
////en_US_UTF-8_ITAMATERIAL_MNU
$ary[100701] = "Initial synchronization of Build file control system with Git. <br/>Register the necessary information and perform the initial synchronization with Git.<br/><br/>*1 At the time of initial registration, one piece of blank data will be registered. Please update it here.<br/>*2 Set the value of the arguments to be passed to the Git clone command for \"Remote repository URL\" and \"Clone repository\".<br/>  git clone \"Remote repository URL\" \"Clone repository\".";
$ary[100702] = "Item No.";
$ary[100703] = "Update";
$ary[100704] = "Error";
$ary[100705] = "Interface information";
$ary[100706] = "Interface information";
$ary[100707] = "Remote repository URL";
$ary[100708] = "Enter the URL of a Git remote repository that has already been created.\n*The following settings must be configured for this repository.\n ・push.default=simple\n ・core.bare=true\n ・core.sharedrepository=1\n\n(E.g.) ssh://root@192.168.1.1/dir1/dir2/main.git";
$ary[100709] = "Clone repository";
$ary[100710] = "Enter the path of the local directory where you want to clone the repository. \nIf the entered directory does not exist, it will be created.\n*A repository currently in use cannot be specified because differential synchronization is not possible. If you specify an existing directory, it must be empty.";
$ary[100711] = "Password";
$ary[100712] = "If an ssh password is set on the remote repository, enter a password.";
$ary[100713] = "Initial synchronization";
$ary[100714] = "Initial synchronization";
$ary[100715] = "Branch";
$ary[100716] = "Enter to specify a branch.";
$ary[100801] = "Create directory for Build file control.<br/>Create a directory for management, using any directory name.";
$ary[100802] = "Directory ID";
$ary[100803] = "Directory master";
$ary[100804] = "Directory master";
$ary[100805] = "Parent directory";
$ary[100806] = "Registered directories are displayed. Select a registered directory as the parent directory.";
$ary[100807] = "Directory";
$ary[100808] = "The \"!”#$%&’()|`;:*<>\?\" symbols cannot be used in the directory name.";
$ary[100809] = "Rights";
$ary[100810] = "Enter rights for the directory you want to create with a three-digit number using numbers from 0 to 7.";
$ary[100811] = "Group";
$ary[100812] = "Enter the group of the directory you want to create with single byte alphanumeric characters.\n*If the entered group does not exist in the server, it will be managed as a \"root\" group.";
$ary[100813] = "User";
$ary[100814] = "Enter the owner of the directory you want to create with single byte alphanumeric characters.\n*If the entered owner does not exist in the server, it will be managed as a \"root\" user.";
$ary[100815] = "Purpose";
$ary[100816] = "Enter a description of purpose, if any.";
$ary[100901] = "Registration of files to be managed.<br/>Register these files with any file name.";
$ary[100902] = "File ID";
$ary[100903] = "File master";
$ary[100904] = "File master";
$ary[100905] = "Directory";
$ary[100906] = "Select the directory to be managed.";
$ary[100907] = "File ";
$ary[100908] = "The \"!”#$%&’()|`;:*<>?\/\" symbols cannot be used for the file name.";
$ary[100909] = "Way to check in ";
$ary[100910] = "Select according to the operation level.\n・Check-in after administrator approval: Check-in request is processed manually\n・Automatic check-in: Check-in request is processed automatically.";
$ary[100911] = "Rights";
$ary[100912] = "Enter rights for the file you want to manage with a three-digit number from 0 to 7.";
$ary[100913] = "Group";
$ary[100914] = "Enter the group of the file you want to create with single byte alphanumeric characters.\n*If the entered group does not exist in the server, it will be managed as a \"root\" group.";
$ary[100915] = "User";
$ary[100916] = "Enter the owner of the file you want to create with single byte alphanumeric characters.\n*If the entered group does not exist in the server, it will be managed as a \"root\" group.";
$ary[100917] = "Purpose";
$ary[100918] = "Enter a description of purpose, if any.";
$ary[101001] = "Data with the Check-in complete status managed in the Build file control system, and the data registered on Git during the initial synchronization is displayed.<br/>The files displayed in filter results can all be downloaded at once.";
$ary[101002] = "Request No.";
$ary[101003] = "File list";
$ary[101004] = "File list";
$ary[101005] = "Full path";
$ary[101006] = "Full path of file.";
$ary[101007] = "File name";
$ary[101008] = "Link to file.";
$ary[101009] = "Date";
$ary[101010] = "Check-in completed date.";
$ary[101011] = "Name";
$ary[101012] = "Person in charge who has requested a check-in.";
$ary[101013] = "Revision";
$ary[101014] = "Git revision";
$ary[101015] = "Latest flag";
$ary[101016] = "\"●\" is displayed for the latest files";
$ary[101017] = "Bulk download of files";
$ary[101101] = "Link the file registered in Build file control with a file used in another console, then register it. <br/>Changes will automatically be reflelcted in the registered file every time it is updated in Build file control.";
$ary[101102] = "Item No.";
$ary[101103] = "File link list(Ansible)";
$ary[101104] = "File link list(Ansible)";
$ary[101105] = "File name in link destination";
$ary[101106] = "Enter the file name registered in the link destination.\nIf the file name entered does not exist in the link destination, it will be newly registered.";
$ary[101107] = "File name";
$ary[101108] = "Select the files to link.";
$ary[101109] = "Revision";
$ary[101110] = "Select the desired revision number.\nIf no revision number is selected, the latest revision will be used.\n*If a revision is specified, it will not be updated automatically.";
$ary[101111] = "Select a file name";
$ary[101112] = "Ansible-Legacy";
$ary[101113] = "Playbook files";
$ary[101114] = "Select \"●\" for the link destination menu.\n*Select only one link destination.";
$ary[101115] = "Template list";
$ary[101116] = "Select \"●\" for the link destination menu.\n*1 Select only one link destination.\n*2 When selecting a link destination, prefix \"File name in link destination\" with \"TPF_\", using single byte alphanumeric characters.";
$ary[101117] = "File list";
$ary[101118] = "Select \"●\" for the link destination menu.\n*1 Select only one link destination.\n*2 When selecting a link destination, prefix \"File name in link destination\" with \"TPF_\", using single byte alphanumeric characters.";
$ary[101119] = "Ansible-Pioneer";
$ary[101120] = "OS type";
$ary[101121] = "Select the OS type of the link destination file";
$ary[101122] = "Dialog files";
$ary[101123] = "Select \"●\" for the link destination menu.\n*Select only one link destination.";
$ary[101124] = "Ansible-Role";
$ary[101125] = "Role package file";
$ary[101126] = "Select \"●\" for the link destination menu.\n*1 Select only one link destination.\n*2 If the linked file is not a prescribed zip file, the registered data will be discarded and an error message will be displayed in the remarks column.";
$ary[101127] = "AnsibleCommon";
$ary[101201] = "Status master";
$ary[101202] = "Item No.";
$ary[101203] = "Status master";
$ary[101204] = "Status master";
$ary[101205] = "Status name";
$ary[101206] = "File progress status.";
$ary[101301] = "Request No.";
$ary[101302] = "Status";
$ary[101303] = "File progress status";
$ary[101304] = "Target";
$ary[101305] = "File name";
$ary[101306] = "File to check-in/check-out";
$ary[101307] = "Check-out request ";
$ary[101308] = "Date";
$ary[101309] = "Date of the check-out request. Automatically set at the time of check-out request.";
$ary[101310] = "Automatically entered at the time of the check-out request";
$ary[101311] = "Name";
$ary[101312] = "Name of user who made the check-out request. Automatically entered at the time of the check-out request.";
$ary[101313] = "Automatically entered at the time of the check-out request";
$ary[101314] = "Change summary";
$ary[101315] = "Change summary";
$ary[101316] = "Scheduled date for check-in";
$ary[101317] = "Scheduled date for check-in";
$ary[101318] = "Check-out information";
$ary[101319] = "Date";
$ary[101320] = "Date of the check-out. Automatically set at the time of check-out.";
$ary[101321] = "Automatically input on check-out";
$ary[101322] = "Name";
$ary[101323] = "Name of user who made the check-out request. Automatically entered at the time of check-out.";
$ary[101324] = "Automatically entered at the time of check-out";
$ary[101325] = "File";
$ary[101326] = "Link for the check-out file. Blank on on creation of a new check-out.";
$ary[101327] = "Revision";
$ary[101328] = "Revision in Git at the time of check-out.";
$ary[101329] = "Check-in request";
$ary[101330] = "Date";
$ary[101331] = "Date of the check-in request. Automatically set at the time of the check-in request.";
$ary[101332] = "Automatically entered at the time of the check-in request";
$ary[101333] = "Name";
$ary[101334] = "Name of user who made the check-in request. Automatically entered at the time of the check-out request.";
$ary[101335] = "Automatically entered at the time of the check-in request";
$ary[101336] = "File";
$ary[101337] = "Link for the check-in file.";
$ary[101338] = "DIFF (txt)";
$ary[101339] = "DIFF file of target file.";
$ary[101340] = "Test item list (xlsx)";
$ary[101341] = "Test item list of target file.";
$ary[101342] = "Evidence (zip)";
$ary[101343] = "Test evidence.";
$ary[101344] = "Check-in information";
$ary[101345] = "Date";
$ary[101346] = "Date of check-in. Date is automatically set at the time of check-in.";
$ary[101347] = "Automatically entered at the time of check-in";
$ary[101348] = "Name";
$ary[101349] = "Name of user who performed the check-in. Automatically entered at the time of check-in.";
$ary[101350] = "Automatically entered at the time of check-in";
$ary[101351] = "Revision";
$ary[101352] = "Revision on Git at the time of check-in.";
$ary[101353] = "Register";
$ary[101354] = "Update";
$ary[101355] = "Error";
$ary[101401] = "Check-out/Check-in data for all the files exchanged in the Build file control system are displayed. The data in this menu is read-only and cannot be modified.";
$ary[101402] = "File management list (browse)";
$ary[101403] = "File management list (browse)";
$ary[101501] = "File check-out request. Select the files for check-out request.\nIf you have confirmed the changes, enter the change summary and the scheduled date for check-in.\n*If you submit a check-out request for a file that has already been checked out, the status for that file will become \"Check-out requested (checking for duplicate requests)\". Selected files will be automatically checked-out when their check-in process is complete.";
$ary[101502] = "File management list (check-out request)";
$ary[101503] = "File management list (check-out request)";
$ary[101601] = "Data in the check-out requested status is displayed.\nBecause check-out is automatically performed for the data registered, no operations are required on this menu.";
$ary[101602] = "File management list (check-out)";
$ary[101603] = "File management list (check-out)";
$ary[101701] = "Data in the checked-out status is displayed.\nThe user updates the displayed data, then makes a check-in request.";
$ary[101702] = "File management list (check-in request)";
$ary[101703] = "File management list (check-in request)";
$ary[101801] = "Data in the check-in requested status is displayed.\nThe administrator updates the displayed data, then approves or rejects the files requested for check-in.";
$ary[101802] = "File management list (check-in)";
$ary[101803] = "File management list (check-in)";
$ary[101901] = "File data with the following status is displayed. To cancel data registration in the middle of the process, update the target data, then cancel the registration.\n*The following seven statuses allow for cancellation. \n Check-out requested\n Check-out requested (checking for duplicate requests)\n Checking-out\n Check-in requested\n Checking-in\n Return (check-out request)\n Return (check-in request)";
$ary[101902] = "File management list (cancel)";
$ary[101903] = "File management list (cancel)";
$ary[102001] = "Link the file registered in Build file control with a file used in another console, then register it. <br/>Changes will automatically be reflelcted in the registered file every time it is updated in Build file control.";
$ary[102002] = "Item No.";
$ary[102003] = "File link list (OpenStack)";
$ary[102004] = "File link list (OpenStack)";
$ary[102005] = "File name in link destination";
$ary[102006] = "Enter the file name registered in the link destination.\nIf the file name entered does not exist in the link destination, it will be newly registered.";
$ary[102007] = "File name";
$ary[102008] = "Select the files to link.";
$ary[102009] = "Revision";
$ary[102010] = "Select the desired revision number.\nIf no revision number is selected, the latest revision will be used.\n*If a revision is specified, it will not be updated automatically.";
$ary[102011] = "Select a file name";
$ary[102012] = "OpenStack";
$ary[102013] = "HEAT template files";
$ary[102014] = "Select \"●\" for the link destination menu.\n*Select only one link destination.";
$ary[102015] = "Environment Configuration file";
$ary[102016] = "Select \"●\" for the link destination menu.\n*Select only one link destination.";
$ary[102101] = "Link the file registered in Build file control with a file used in another console, then register it. <br/>Changes will automatically be reflelcted in the registered file every time it is updated in Build file control.";
$ary[102102] = "Item No.";
$ary[102103] = "File link list(OpenShift)";
$ary[102104] = "File link list(OpenShift)";
$ary[102105] = "File name in link destination";
$ary[102106] = "Enter the file name registered in the link destination.\nIf the file name entered does not exist in the link destination, it will be newly registered.";
$ary[102107] = "File name";
$ary[102108] = "Select the files to link.";
$ary[102109] = "Revision";
$ary[102110] = "Select the desired revision number.\nIf no revision number is selected, the latest revision will be used.\n*If a revision is specified, it will not be updated automatically.";
$ary[102111] = "Select a file name";
$ary[102112] = "OpenShift";
$ary[102113] = "Config type";
$ary[102114] = "Select the config type of the link destination file";
$ary[102201] = "Link the file registered in Build file control with a file used in another console, then register it. <br/>Changes will automatically be reflelcted in the registered file every time it is updated in Build file control.";
$ary[102202] = "Item No.";
$ary[102203] = "File link list(DSC)";
$ary[102204] = "File link list(DSC)";
$ary[102205] = "File name in link destination";
$ary[102206] = "Enter the file name registered in the link destination.\nIf the file name entered does not exist in the link destination, it will be newly registered.";
$ary[102207] = "File name";
$ary[102208] = "Select the files to link.";
$ary[102209] = "Revision";
$ary[102210] = "Select the desired revision number.\nIf no revision number is selected, the latest revision will be used.\n*If a revision is specified, it will not be updated automatically.";
$ary[102211] = "Select a file name";
$ary[102301] = "Link the file registered in Build file control with a file used in another console, then register it. <br/>Changes will automatically be reflelcted in the registered file every time it is updated in Build file control.";
$ary[102302] = "Item No.";
$ary[102303] = "File link list (TestPlayer)";
$ary[102304] = "File link list (TestPlayer)";
$ary[102305] = "File name in link destination";
$ary[102306] = "Enter the file name registered in the link destination.\nIf the file name entered does not exist in the link destination, it will be newly registered.";
$ary[102307] = "File name";
$ary[102308] = "Select the files to link.";
$ary[102309] = "Revision";
$ary[102310] = "Select the desired revision number.\nIf no revision number is selected, the latest revision will be used.\n*If a revision is specified, it will not be updated automatically.";
$ary[102311] = "Select a file name";
$ary[102401] = "Link the file registered in Build file control with a file used in another console, then register it. <br/>Changes will automatically be reflelcted in the registered file every time it is updated in Build file control.";
$ary[102402] = "Item No.";
$ary[102403] = "File link list (SCRAB standard scenario SG file list)";
$ary[102404] = "File link list (SCRAB standard scenario SG file list)";
$ary[102405] = "Config ID";
$ary[102406] = "Select the config ID registered in the link destination file.";
$ary[102407] = "File name";
$ary[102408] = "Select the files to link.";
$ary[102409] = "Revision";
$ary[102410] = "Select the desired revision number.\nIf no revision number is selected, the latest revision will be used.\n*If a revision is specified, it will not be updated automatically.";
$ary[102411] = "Select a file name";
$ary[102501] = "Link the file registered in Build file control with a file used in another console, then register it. <br/>Changes will automatically be reflelcted in the registered file every time it is updated in Build file control.";
$ary[102502] = "Item No.";
$ary[102503] = "File link list (user scenario details list)";
$ary[102504] = "File link list (user scenario details list)";
$ary[102505] = "Scenario name";
$ary[102506] = "Select the scenario name to link.";
$ary[102507] = "Script file";
$ary[102508] = "File name";
$ary[102509] = "Select the files to link.";
$ary[102510] = "Revision";
$ary[102511] = "Select the desired revision number.\nIf no revision number is selected, the latest revision will be used.\n*If a revision is specified, it will not be updated automatically.";
$ary[102512] = "Select the scenario name to link.";
$ary[102513] = "CSV file";
$ary[102514] = "File name";
$ary[102515] = "Select the files to link.";
$ary[102516] = "Revision";
$ary[102517] = "Select the desired revision number.\nIf no revision number is selected, the latest revision will be used.\n*If a revision is specified, it will not be updated automatically.";
$ary[102518] = "Select the scenario name to link.";
$ary[102519] = "SG file";
$ary[102520] = "File name";
$ary[102521] = "Select the files to link.";
$ary[102522] = "Revision";
$ary[102523] = "Select the desired revision number.\nIf no revision number is selected, the latest revision will be used.\n*If a revision is specified, it will not be updated automatically.";
$ary[102524] = "Select the scenario name to link.";
?>