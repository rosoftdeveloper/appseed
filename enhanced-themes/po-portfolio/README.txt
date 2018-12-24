

Folder structure

--------------------------------------
index.html -> original index file
css        -> original css Folder
js         -> original js Folder
images     -> original images Folder
fonts      -> original fonts Folder

--------------------------------------
index_1.html -> Processed index file - v1
Changes:
    Normalized assets: Css, Js, Fonts and images are loaded from assets/[js, css] 
    This is helpfull to have an well structured project, ready to be injected in webpack .. or whatever tool you need 

Note: the main content has all cards

--------------------------------------
index_1.json -> resourses map associated with index_1.html
Sections:

    file: original processed file

    css_raw: original css paths
    css: normalized css paths ( all files are loaded from assets/css/.. )

    js_raw: original js paths
    js: normalized js paths ( all files are loaded from assets/js/.. )

    img_raw: original img paths
    img: normalized images paths ( all files are loaded from assets/img/.. )

    strings: extracted strings based on the KEY injected in template
    strings_info: help associated by the user during component processing (optional)

--------------------------------------
index_2.html -> Processed index file - v2
Changes:
    Normalized assets: Css, Js, Fonts and images are loaded from assets/[js, css] 
    
Note: the main content has 1 card 

--------------------------------------
index_2.json -> resourses map associated with index_2.html


--------------------------------------
COMPONENTS

    1. component_content.html        - content component with al cards inside 
    2. component_content_1_elem.html - content component with 1 card [ oiginal text inside ]
    3. component_content_1_elem.html - content component with 1 card [ hardcoded text stripped, and saved into index_2.json, section strings ]


