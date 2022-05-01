<!DOCTYPE html>

<html dir="ltr" lang="nl" xml:lang="nl">
  <head>
    <script> alert("Deze website is geen offciele digitap website gebruik deze website NIET!!!"); </script> 
    <title>Digitap learning: Op de site inloggen</title>
    <link
      rel="shortcut icon"
      href="https://learning.ap.be/theme/image.php/fordson/theme/1639992185/favicon"
    />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta
      name="keywords"
      content="moodle, Digitap learning: Op de site inloggen"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://learning.ap.be/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css"
    />
    <script id="firstthemesheet" type="text/css">
      /** Required in order to fix style inclusion problems in IE with YUI **/
    </script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://learning.ap.be/theme/styles.php/fordson/1639992185_1637270809/all"
    />
    <script>
      //<![CDATA[
      var M = {};
      M.yui = {};
      M.pageloadstarttime = new Date();
      M.cfg = {
        wwwroot: "https:\/\/learning.ap.be",
        sesskey: "Z5SvPddgSj",
        sessiontimeout: "7200",
        themerev: "1639992185",
        slasharguments: 1,
        theme: "fordson",
        iconsystemmodule: "core\/icon_system_fontawesome",
        jsrev: "1639992185",
        admin: "admin",
        svgicons: true,
        usertimezone: "Europa\/Brussel",
        contextid: 1,
        langrev: 1650939187,
        templaterev: "1639992185",
      };
      var yui1ConfigFn = function (me) {
        if (/-skin|reset|fonts|grids|base/.test(me.name)) {
          me.type = "css";
          me.path = me.path.replace(/\.js/, ".css");
          me.path = me.path.replace(
            /\/yui2-skin/,
            "/assets/skins/sam/yui2-skin"
          );
        }
      };
      var yui2ConfigFn = function (me) {
        var parts = me.name.replace(/^moodle-/, "").split("-"),
          component = parts.shift(),
          module = parts[0],
          min = "-min";
        if (/-(skin|core)$/.test(me.name)) {
          parts.pop();
          me.type = "css";
          min = "";
        }
        if (module) {
          var filename = parts.join("-");
          me.path =
            component + "/" + module + "/" + filename + min + "." + me.type;
        } else {
          me.path = component + "/" + component + "." + me.type;
        }
      };
      YUI_config = {
        debug: false,
        base: "https:\/\/learning.ap.be\/lib\/yuilib\/3.17.2\/",
        comboBase: "https:\/\/learning.ap.be\/theme\/yui_combo.php?",
        combine: true,
        filter: null,
        insertBefore: "firstthemesheet",
        groups: {
          yui2: {
            base: "https:\/\/learning.ap.be\/lib\/yuilib\/2in3\/2.9.0\/build\/",
            comboBase: "https:\/\/learning.ap.be\/theme\/yui_combo.php?",
            combine: true,
            ext: false,
            root: "2in3\/2.9.0\/build\/",
            patterns: { "yui2-": { group: "yui2", configFn: yui1ConfigFn } },
          },
          moodle: {
            name: "moodle",
            base: "https:\/\/learning.ap.be\/theme\/yui_combo.php?m\/1639992185\/",
            combine: true,
            comboBase: "https:\/\/learning.ap.be\/theme\/yui_combo.php?",
            ext: false,
            root: "m\/1639992185\/",
            patterns: {
              "moodle-": { group: "moodle", configFn: yui2ConfigFn },
            },
            filter: null,
            modules: {
              "moodle-core-actionmenu": {
                requires: ["base", "event", "node-event-simulate"],
              },
              "moodle-core-blocks": {
                requires: [
                  "base",
                  "node",
                  "io",
                  "dom",
                  "dd",
                  "dd-scroll",
                  "moodle-core-dragdrop",
                  "moodle-core-notification",
                ],
              },
              "moodle-core-chooserdialogue": {
                requires: ["base", "panel", "moodle-core-notification"],
              },
              "moodle-core-dragdrop": {
                requires: [
                  "base",
                  "node",
                  "io",
                  "dom",
                  "dd",
                  "event-key",
                  "event-focus",
                  "moodle-core-notification",
                ],
              },
              "moodle-core-event": { requires: ["event-custom"] },
              "moodle-core-formchangechecker": {
                requires: ["base", "event-focus", "moodle-core-event"],
              },
              "moodle-core-handlebars": {
                condition: { trigger: "handlebars", when: "after" },
              },
              "moodle-core-languninstallconfirm": {
                requires: [
                  "base",
                  "node",
                  "moodle-core-notification-confirm",
                  "moodle-core-notification-alert",
                ],
              },
              "moodle-core-lockscroll": { requires: ["plugin", "base-build"] },
              "moodle-core-maintenancemodetimer": {
                requires: ["base", "node"],
              },
              "moodle-core-notification": {
                requires: [
                  "moodle-core-notification-dialogue",
                  "moodle-core-notification-alert",
                  "moodle-core-notification-confirm",
                  "moodle-core-notification-exception",
                  "moodle-core-notification-ajaxexception",
                ],
              },
              "moodle-core-notification-dialogue": {
                requires: [
                  "base",
                  "node",
                  "panel",
                  "escape",
                  "event-key",
                  "dd-plugin",
                  "moodle-core-widget-focusafterclose",
                  "moodle-core-lockscroll",
                ],
              },
              "moodle-core-notification-alert": {
                requires: ["moodle-core-notification-dialogue"],
              },
              "moodle-core-notification-confirm": {
                requires: ["moodle-core-notification-dialogue"],
              },
              "moodle-core-notification-exception": {
                requires: ["moodle-core-notification-dialogue"],
              },
              "moodle-core-notification-ajaxexception": {
                requires: ["moodle-core-notification-dialogue"],
              },
              "moodle-core-popuphelp": { requires: ["moodle-core-tooltip"] },
              "moodle-core-tooltip": {
                requires: [
                  "base",
                  "node",
                  "io-base",
                  "moodle-core-notification-dialogue",
                  "json-parse",
                  "widget-position",
                  "widget-position-align",
                  "event-outside",
                  "cache-base",
                ],
              },
              "moodle-core_availability-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "event-delegate",
                  "panel",
                  "moodle-core-notification-dialogue",
                  "json",
                ],
              },
              "moodle-backup-backupselectall": {
                requires: ["node", "event", "node-event-simulate", "anim"],
              },
              "moodle-backup-confirmcancel": {
                requires: [
                  "node",
                  "node-event-simulate",
                  "moodle-core-notification-confirm",
                ],
              },
              "moodle-course-categoryexpander": {
                requires: ["node", "event-key"],
              },
              "moodle-course-dragdrop": {
                requires: [
                  "base",
                  "node",
                  "io",
                  "dom",
                  "dd",
                  "dd-scroll",
                  "moodle-core-dragdrop",
                  "moodle-core-notification",
                  "moodle-course-coursebase",
                  "moodle-course-util",
                ],
              },
              "moodle-course-formatchooser": {
                requires: ["base", "node", "node-event-simulate"],
              },
              "moodle-course-management": {
                requires: [
                  "base",
                  "node",
                  "io-base",
                  "moodle-core-notification-exception",
                  "json-parse",
                  "dd-constrain",
                  "dd-proxy",
                  "dd-drop",
                  "dd-delegate",
                  "node-event-delegate",
                ],
              },
              "moodle-course-util": {
                requires: ["node"],
                use: ["moodle-course-util-base"],
                submodules: {
                  "moodle-course-util-base": {},
                  "moodle-course-util-section": {
                    requires: ["node", "moodle-course-util-base"],
                  },
                  "moodle-course-util-cm": {
                    requires: ["node", "moodle-course-util-base"],
                  },
                },
              },
              "moodle-form-dateselector": {
                requires: ["base", "node", "overlay", "calendar"],
              },
              "moodle-form-passwordunmask": { requires: [] },
              "moodle-form-shortforms": {
                requires: [
                  "node",
                  "base",
                  "selector-css3",
                  "moodle-core-event",
                ],
              },
              "moodle-question-chooser": {
                requires: ["moodle-core-chooserdialogue"],
              },
              "moodle-question-preview": {
                requires: [
                  "base",
                  "dom",
                  "event-delegate",
                  "event-key",
                  "core_question_engine",
                ],
              },
              "moodle-question-searchform": { requires: ["base", "node"] },
              "moodle-availability_completion-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_date-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "io",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_grade-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_group-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_grouping-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_language-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "node-event-simulate",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_password-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "event-valuechange",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_password-popup": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core-notification-dialogue",
                  "io-base",
                ],
              },
              "moodle-availability_profile-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-availability_xp-form": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "handlebars",
                  "moodle-core_availability-form",
                ],
              },
              "moodle-qtype_musictheory-musictheorykeyboardui": {
                requires: ["base", "node", "datatype"],
              },
              "moodle-qtype_musictheory-musictheoryqtype": {
                requires: ["base", "node", "datatype", "node-event-simulate"],
              },
              "moodle-qtype_musictheory-musictheoryui": {
                requires: ["base", "node", "datatype", "panel", "dd-plugin"],
              },
              "moodle-mod_assign-history": { requires: ["node", "transition"] },
              "moodle-mod_attendance-groupfilter": {
                requires: ["base", "node"],
              },
              "moodle-mod_checklist-linkselect": {
                requires: ["node", "event-valuechange"],
              },
              "moodle-mod_customcert-rearrange": {
                requires: ["dd-delegate", "dd-drag"],
              },
              "moodle-mod_quiz-autosave": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "event-valuechange",
                  "node-event-delegate",
                  "io-form",
                ],
              },
              "moodle-mod_quiz-dragdrop": {
                requires: [
                  "base",
                  "node",
                  "io",
                  "dom",
                  "dd",
                  "dd-scroll",
                  "moodle-core-dragdrop",
                  "moodle-core-notification",
                  "moodle-mod_quiz-quizbase",
                  "moodle-mod_quiz-util-base",
                  "moodle-mod_quiz-util-page",
                  "moodle-mod_quiz-util-slot",
                  "moodle-course-util",
                ],
              },
              "moodle-mod_quiz-modform": {
                requires: ["base", "node", "event"],
              },
              "moodle-mod_quiz-questionchooser": {
                requires: [
                  "moodle-core-chooserdialogue",
                  "moodle-mod_quiz-util",
                  "querystring-parse",
                ],
              },
              "moodle-mod_quiz-quizbase": { requires: ["base", "node"] },
              "moodle-mod_quiz-toolboxes": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "event-key",
                  "io",
                  "moodle-mod_quiz-quizbase",
                  "moodle-mod_quiz-util-slot",
                  "moodle-core-notification-ajaxexception",
                ],
              },
              "moodle-mod_quiz-util": {
                requires: ["node", "moodle-core-actionmenu"],
                use: ["moodle-mod_quiz-util-base"],
                submodules: {
                  "moodle-mod_quiz-util-base": {},
                  "moodle-mod_quiz-util-slot": {
                    requires: ["node", "moodle-mod_quiz-util-base"],
                  },
                  "moodle-mod_quiz-util-page": {
                    requires: ["node", "moodle-mod_quiz-util-base"],
                  },
                },
              },
              "moodle-mod_scheduler-delselected": {
                requires: ["base", "node", "event"],
              },
              "moodle-mod_scheduler-saveseen": {
                requires: ["base", "node", "event"],
              },
              "moodle-mod_scheduler-studentlist": {
                requires: ["base", "node", "event", "io"],
              },
              "moodle-message_airnotifier-toolboxes": {
                requires: ["base", "node", "io"],
              },
              "moodle-block_xp-filters": {
                requires: [
                  "base",
                  "node",
                  "moodle-core-dragdrop",
                  "moodle-core-notification-confirm",
                  "moodle-block_xp-rulepicker",
                ],
              },
              "moodle-block_xp-notification": {
                requires: [
                  "base",
                  "node",
                  "handlebars",
                  "button-plugin",
                  "moodle-core-notification-dialogue",
                ],
              },
              "moodle-block_xp-rulepicker": {
                requires: [
                  "base",
                  "node",
                  "handlebars",
                  "moodle-core-notification-dialogue",
                ],
              },
              "moodle-filter_glossary-autolinker": {
                requires: [
                  "base",
                  "node",
                  "io-base",
                  "json-parse",
                  "event-delegate",
                  "overlay",
                  "moodle-core-event",
                  "moodle-core-notification-alert",
                  "moodle-core-notification-exception",
                  "moodle-core-notification-ajaxexception",
                ],
              },
              "moodle-filter_mathjaxloader-loader": {
                requires: ["moodle-core-event"],
              },
              "moodle-editor_atto-editor": {
                requires: [
                  "node",
                  "transition",
                  "io",
                  "overlay",
                  "escape",
                  "event",
                  "event-simulate",
                  "event-custom",
                  "node-event-html5",
                  "node-event-simulate",
                  "yui-throttle",
                  "moodle-core-notification-dialogue",
                  "moodle-core-notification-confirm",
                  "moodle-editor_atto-rangy",
                  "handlebars",
                  "timers",
                  "querystring-stringify",
                ],
              },
              "moodle-editor_atto-plugin": {
                requires: [
                  "node",
                  "base",
                  "escape",
                  "event",
                  "event-outside",
                  "handlebars",
                  "event-custom",
                  "timers",
                  "moodle-editor_atto-menu",
                ],
              },
              "moodle-editor_atto-menu": {
                requires: [
                  "moodle-core-notification-dialogue",
                  "node",
                  "event",
                  "event-custom",
                ],
              },
              "moodle-editor_atto-rangy": { requires: [] },
              "moodle-editor_ousupsub-editor": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "event-custom",
                  "moodle-editor_ousupsub-rangy",
                ],
              },
              "moodle-editor_ousupsub-rangy": { requires: [] },
              "moodle-format_grid-gridkeys": { requires: ["event-nav-keys"] },
              "moodle-report_eventlist-eventfilter": {
                requires: [
                  "base",
                  "event",
                  "node",
                  "node-event-delegate",
                  "datatable",
                  "autocomplete",
                  "autocomplete-filters",
                ],
              },
              "moodle-report_loglive-fetchlogs": {
                requires: [
                  "base",
                  "event",
                  "node",
                  "io",
                  "node-event-delegate",
                ],
              },
              "moodle-gradereport_grader-gradereporttable": {
                requires: [
                  "base",
                  "node",
                  "event",
                  "handlebars",
                  "overlay",
                  "event-hover",
                ],
              },
              "moodle-gradereport_history-userselector": {
                requires: [
                  "escape",
                  "event-delegate",
                  "event-key",
                  "handlebars",
                  "io-base",
                  "json-parse",
                  "moodle-core-notification-dialogue",
                ],
              },
              "moodle-tool_capability-search": { requires: ["base", "node"] },
              "moodle-tool_lp-dragdrop-reorder": {
                requires: ["moodle-core-dragdrop"],
              },
              "moodle-tool_monitor-dropdown": {
                requires: ["base", "event", "node"],
              },
              "moodle-assignfeedback_editpdf-editor": {
                requires: [
                  "base",
                  "event",
                  "node",
                  "io",
                  "graphics",
                  "json",
                  "event-move",
                  "event-resize",
                  "transition",
                  "querystring-stringify-simple",
                  "moodle-core-notification-dialog",
                  "moodle-core-notification-alert",
                  "moodle-core-notification-warning",
                  "moodle-core-notification-exception",
                  "moodle-core-notification-ajaxexception",
                ],
              },
              "moodle-atto_accessibilitychecker-button": {
                requires: ["color-base", "moodle-editor_atto-plugin"],
              },
              "moodle-atto_accessibilityhelper-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_align-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_bold-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_charmap-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_clear-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_collapse-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_embedquestion-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_emojipicker-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_emoticon-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_equation-button": {
                requires: [
                  "moodle-editor_atto-plugin",
                  "moodle-core-event",
                  "io",
                  "event-valuechange",
                  "tabview",
                  "array-extras",
                ],
              },
              "moodle-atto_generico-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_h5p-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_html-beautify": {},
              "moodle-atto_html-button": {
                requires: [
                  "promise",
                  "moodle-editor_atto-plugin",
                  "moodle-atto_html-beautify",
                  "moodle-atto_html-codemirror",
                  "event-valuechange",
                ],
              },
              "moodle-atto_html-codemirror": {
                requires: ["moodle-atto_html-codemirror-skin"],
              },
              "moodle-atto_image-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_indent-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_italic-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_link-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_managefiles-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_managefiles-usedfiles": {
                requires: ["node", "escape"],
              },
              "moodle-atto_media-button": {
                requires: [
                  "moodle-editor_atto-plugin",
                  "moodle-form-shortforms",
                ],
              },
              "moodle-atto_multilang2-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_noautolink-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_orderedlist-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_panoptobutton-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_recordrtc-button": {
                requires: [
                  "moodle-editor_atto-plugin",
                  "moodle-atto_recordrtc-recording",
                ],
              },
              "moodle-atto_recordrtc-recording": {
                requires: ["moodle-atto_recordrtc-button"],
              },
              "moodle-atto_rtl-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_sketch-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_strike-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_subscript-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_superscript-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_table-button": {
                requires: [
                  "moodle-editor_atto-plugin",
                  "moodle-editor_atto-menu",
                  "event",
                  "event-valuechange",
                ],
              },
              "moodle-atto_teamsmeeting-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_title-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_underline-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_undo-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_unorderedlist-button": {
                requires: ["moodle-editor_atto-plugin"],
              },
              "moodle-atto_wiris-button": {
                requires: ["moodle-editor_atto-plugin", "get"],
              },
            },
          },
          gallery: {
            name: "gallery",
            base: "https:\/\/learning.ap.be\/lib\/yuilib\/gallery\/",
            combine: true,
            comboBase: "https:\/\/learning.ap.be\/theme\/yui_combo.php?",
            ext: false,
            root: "gallery\/1639992185\/",
            patterns: { "gallery-": { group: "gallery" } },
          },
        },
        modules: {
          core_filepicker: {
            name: "core_filepicker",
            fullpath:
              "https:\/\/learning.ap.be\/lib\/javascript.php\/1639992185\/repository\/filepicker.js",
            requires: [
              "base",
              "node",
              "node-event-simulate",
              "json",
              "async-queue",
              "io-base",
              "io-upload-iframe",
              "io-form",
              "yui2-treeview",
              "panel",
              "cookie",
              "datatable",
              "datatable-sort",
              "resize-plugin",
              "dd-plugin",
              "escape",
              "moodle-core_filepicker",
              "moodle-core-notification-dialogue",
            ],
          },
          core_comment: {
            name: "core_comment",
            fullpath:
              "https:\/\/learning.ap.be\/lib\/javascript.php\/1639992185\/comment\/comment.js",
            requires: [
              "base",
              "io-base",
              "node",
              "json",
              "yui2-animation",
              "overlay",
              "escape",
            ],
          },
          mathjax: {
            name: "mathjax",
            fullpath:
              "https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.8\/MathJax.js?delayStartupUntil=configured",
          },
        },
      };
      M.yui.loader = { modules: {} };

      //]]>
    </script>

    <link
      rel="stylesheet"
      type="text/css"
      href="/theme/fordson/ap/bjf1qte.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="/theme/fordson/ap/viavictor.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="/theme/fordson/ap/jquery-ui.css"
    />
    <style>
      .collapsibleondersteuning {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
      }

      .active,
      .collapsibleondersteuning:hover {
        background-color: #ccc;
      }

      .collapsibleondersteuning2 {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 40%;
        border: none;
        text-align: center;
        outline: none;
        font-size: 15px;
      }

      .active,
      .collapsibleondersteuning2:hover {
        background-color: #ccc;
      }
      .que.calculated .answer input[type="text"] {
        width: auto;
      }
    </style>
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body
    id="page-login-index"
    class="format-site path-login chrome dir-ltr lang-nl yui-skin-sam yui3-skin-sam learning-ap-be pagelayout-login course-1 context-1 notloggedin"
  >
    <div id="page-wrapper">
      <div>
        <a class="sr-only sr-only-focusable" href="#maincontent"
          >Ga naar hoofdinhoud</a
        >
      </div>
      <script src="https://learning.ap.be/lib/javascript.php/1639992185/lib/babel-polyfill/polyfill.min.js"></script>
      <script src="https://learning.ap.be/lib/javascript.php/1639992185/lib/polyfills/polyfill.js"></script>
      <script src="https://learning.ap.be/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script>
      <script src="https://learning.ap.be/lib/javascript.php/1639992185/lib/javascript-static.js"></script>
      <script>
        //<![CDATA[
        document.body.className += " jsenabled";
        //]]>
      </script>

      <!--<div style="margin-top: 50px; padding: 4px; text-align: center; background: #FFA500FF; color: #FFF; z-index: 99999;font-size: 1.2em;">Vanavond zal er tussen 22u en 23u een kort onderhoud plaatsvinden. Digitap is op dat moment niet bereikbaar</div>-->

      <div id="page" class="container-fluid mt-0 customloginimage">
        <div id="page-content" class="row">
          <section id="region-main" class="col-12">
            <div class="loginslideshow"></div>
            <span class="notifications" id="user-notifications"></span>
            <div role="main">
              <span id="maincontent"></span>
              <div class="m-y-3 hidden-sm-down"></div>

              <div class="row signin">
                <div class="col-xl-3 push-xl-1 col-md-6">
                  <div class="fpsignup">
                    <div class="card-title text-xs-center">
                      <h1>Digitap learning</h1>
                      <hr />
                    </div>
                    <div class="signinform">
                      <h4>Aanmelden voor AP gebruikers</h4>

                      <div class="potentialidplist" class="mt-3">
                        <div class="potentialidp">
                          <a
                            href="https://learning.ap.be/auth/oidc/"
                            title="Login AP Account"
                            class="btn btn-secondary btn-block"
                          >
                            <img
                              src="https://learning.ap.be/theme/image.php/fordson/auth_oidc/1639992185/0/customicon"
                              alt=""
                              width="24"
                              height="24"
                            />
                            Login AP Account
                          </a>
                        </div>
                      </div>

                      <div class="login-classic-zone">
                        <a href="#" id="login_classic_toggle"
                          >Aanmelden voor andere gebruikers ></a
                        >

                        <form
                          id="login_classic_form"
                          class="m-t-1"
                          action="https://learning.ap.be/login/index.php"
                          method="POST"
                          role="form"
                          style="display: none"
                        >
                          <input
                            type="hidden"
                            name="logintoken"
                            value="OrCttq1ai04bSAv6OgFp3UKAuufZl2mH"
                          />
                          <label for="username"> Gebruikersnaam </label>
                          <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input
                              type="text"
                              class="form-control"
                              id="username"
                              name="username"
                              placeholder="Gebruikersnaam"
                              required
                            />
                          </div>
                          <label for="password">Wachtwoord</label>
                          <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input
                              type="password"
                              class="form-control"
                              id="password"
                              name="password"
                              placeholder="Wachtwoord"
                              required
                            />
                          </div>
                          <div class="sign-up-btn">
                            <button type="submit" class="btn btn-primary">
                              Login
                            </button>
                          </div>
                          <p>
                            <a
                              href="https://learning.ap.be/login/forgot_password.php"
                              >Ben je je gebruikersnaam of wachtwoord
                              vergeten?</a
                            >
                          </p>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-8 push-xl-1 col-md-6">
                  <div class="fpsignup shortcuts-zone">
                    <h1>Snelkoppelingen</h1>
                    <hr />
                    <ul>
                      <li>
                        <a
                          href="https://webmail.ap.be/"
                          target="_new"
                          class="shortcut"
                          title="Webmail"
                          ><i class="icon fa fa-envelope"></i>Webmail</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://e-campus.ap.be/"
                          target="_new"
                          class="shortcut"
                          title="e-campus"
                          ><i class="icon fa fa-bank"></i>e-campus</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://ibamaflex.ap.be/"
                          target="_new"
                          class="shortcut"
                          title="iBaMaFlex!"
                          ><i class="icon fa fa-question-circle"></i
                          >iBaMaFlex!</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://arche.webuntis.com/WebUntis/?school=AP-Hogeschool-Antwerpen#main"
                          target="_new"
                          class="shortcut"
                          title="Lesrooster"
                          ><i class="icon fa fa-calendar"></i>Webuntis</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://myarts.ap.be/GeneralForms/LogonPage.aspx"
                          target="_new"
                          class="shortcut"
                          title="MyArts"
                          ><i class="icon fa fa-calendar"></i>MyArts</a
                        >
                      </li>
                      <li>
                        <a
                          href="http://ictpedia.ap.be/index.php/ICTpedia"
                          target="_new"
                          class="shortcut"
                          title="ICTpedia"
                          ><i class="icon fa fa-laptop"></i>ICTpedia</a
                        >
                      </li>
                      <li>
                        <a
                          href="http://ects.ap.be/"
                          target="_new"
                          class="shortcut"
                          title="ECTS-fiches"
                          ><i class="icon fa fa-files-o"></i>ECTS-fiches</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://wachtwoord.ap.be/"
                          target="_new"
                          class="shortcut"
                          title="Wachtwoord"
                          ><i class="icon fa fa-key"></i>Wachtwoord /
                          Password</a
                        >
                      </li>
                      <li>
                        <a
                          href="http://bibliotheek.ap.be/"
                          target="_new"
                          class="shortcut"
                          title="Bibliotheken"
                          ><i class="icon fa fa-book"></i>Bibliotheken /
                          Libraries</a
                        >
                      </li>
                      <li>
                        <a
                          href="https://stats.ap.be/"
                          target="_new"
                          class="shortcut"
                          title="Beschikbaarheid systemen"
                          ><i class="icon fa fa-server"></i>System monitoring</a
                        >
                      </li>
                      <li>
                        <a
                          href="http://alumni.ap.be/"
                          target="_new"
                          class="shortcut"
                          title="Vacatures"
                          ><i class="icon fa fa-briefcase"></i>Vacatures voor
                          studenten / Job offers for students</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="logintop"></div>
                </div>
              </div>
            </div>
            <div class="customloginspacer"></div>
          </section>
        </div>
      </div>
      <div id="fordsonlogin" class="fordsonlogin">
        <div class="container col-12"></div>
      </div>

      <footer id="page-footer" class="py-3 text-dark">
        <div class="container">
          <div id="course-footer"></div>

          <div class="row">
            <div class="col-md-8">
              <div class="text_to_html">
                <p>
                  <a
                    href="https://itunes.apple.com/app/moodle-mobile/id633359593?mt=8"
                    target="_blank"
                    rel="noreferrer noopener"
                    ><img
                      src="https://download.moodle.org/theme/image.php/moodleorgcleaned_downloads/local_downloadmoodleorg/1484296644/app-store"
                      alt=""
                      class="img-responsive atto_image_button_text-bottom"
                      width="135"
                      height="40"
                  /></a>
                  <a
                    href="https://play.google.com/store/apps/details?id=com.moodle.moodlemobile"
                    target="_blank"
                    rel="noreferrer noopener"
                    ><img
                      src="https://download.moodle.org/theme/image.php/moodleorgcleaned_downloads/local_downloadmoodleorg/1484296644/google-play"
                      alt=""
                      style="font-size: 0.9375rem"
                      class="img-responsive atto_image_button_text-bottom"
                      width="115"
                      height="40" /></a
                  ><br />
                </p>
              </div>

              <div class="logininfo">Je bent niet ingelogd</div>

              <div class="homelink">
                <a href="https://learning.ap.be/">Startpagina</a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="brandbox">
                <ul class="footercontact"></ul>
              </div>
            </div>
          </div>
          <nav class="nav navbar-nav d-md-none">
            <ul class="list-unstyled pt-3">
              <li><a href="#" title="Taal">Nederlands ‎(nl)‎</a></li>
              <li>
                <ul class="list-unstyled ml-3">
                  <li>
                    <a
                      href="https://learning.ap.be/login/index.php?lang=en"
                      title="English ‎(en)‎"
                      >English ‎(en)‎</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://learning.ap.be/login/index.php?lang=nl"
                      title="Nederlands ‎(nl)‎"
                      >Nederlands ‎(nl)‎</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </nav>

          <script>
            //<![CDATA[
            var require = {
              baseUrl: "https://learning.ap.be/lib/requirejs.php/1639992185/",
              // We only support AMD modules with an explicit define() statement.
              enforceDefine: true,
              skipDataMain: true,
              waitSeconds: 0,

              paths: {
                jquery:
                  "https://learning.ap.be/lib/javascript.php/1639992185/lib/jquery/jquery-3.5.1.min",
                jqueryui:
                  "https://learning.ap.be/lib/javascript.php/1639992185/lib/jquery/ui-1.12.1/jquery-ui.min",
                jqueryprivate:
                  "https://learning.ap.be/lib/javascript.php/1639992185/lib/requirejs/jquery-private",
              },

              // Custom jquery config map.
              map: {
                // '*' means all modules will get 'jqueryprivate'
                // for their 'jquery' dependency.
                "*": { jquery: "jqueryprivate" },
                // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
                "*": { process: "core/first" },

                // 'jquery-private' wants the real jQuery module
                // though. If this line was not here, there would
                // be an unresolvable cyclic dependency.
                jqueryprivate: { jquery: "jquery" },
              },
            };

            //]]>
          </script>
          <script src="https://learning.ap.be/lib/javascript.php/1639992185/lib/requirejs/require.min.js"></script>
          <script>
            //<![CDATA[
            M.util.js_pending("core/first");
            require(["core/first"], function () {
              require(["core/prefetch"]);
              require(["media_videojs/loader"], function (loader) {
                loader.setUp(function (videojs) {
                  videojs.options.flash.swf =
                    "https://learning.ap.be/media/player/videojs/videojs/video-js.swf";
                  videojs.addLanguage("nl", {
                    "Audio Player": "Audiospeler",
                    "Video Player": "Videospeler",
                    Play: "Afspelen",
                    Pause: "Pauzeren",
                    Replay: "Opnieuw afspelen",
                    "Current Time": "Huidige tijd",
                    Duration: "Tijdsduur",
                    "Remaining Time": "Resterende tijd",
                    "Stream Type": "Streamtype",
                    LIVE: "LIVE",
                    Loaded: "Geladen",
                    Progress: "Voortgang",
                    "Progress Bar": "Voortgangsbalk",
                    "progress bar timing: currentTime={1} duration={2}":
                      "{1} van {2}",
                    Fullscreen: "Volledig scherm",
                    "Non-Fullscreen": "Geen volledig scherm",
                    Mute: "Dempen",
                    Unmute: "Niet dempen",
                    "Playback Rate": "Afspeelsnelheid",
                    Subtitles: "Ondertiteling",
                    "subtitles off": "ondertiteling uit",
                    Captions: "Bijschriften",
                    "captions off": "bijschriften uit",
                    Chapters: "Hoofdstukken",
                    Descriptions: "Beschrijvingen",
                    "descriptions off": "beschrijvingen uit",
                    "Audio Track": "Audiospoor",
                    "Volume Level": "Geluidsniveau",
                    "You aborted the media playback":
                      "U heeft het afspelen van de media afgebroken",
                    "A network error caused the media download to fail part-way.":
                      "Een netwerkfout heeft ervoor gezorgd dat het downloaden van de media halverwege is mislukt.",
                    "The media could not be loaded, either because the server or network failed or because the format is not supported.":
                      "De media kon niet worden geladen, dit komt doordat of de server of het netwerk mislukt of doordat het formaat niet wordt ondersteund.",
                    "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.":
                      "Het afspelen van de media is afgebroken door een probleem met beschadeigde gegevens of doordat de media functies gebruikt die uw browser niet ondersteund.",
                    "No compatible source was found for this media.":
                      "Er is geen geschikte bron voor deze media gevonden.",
                    "The media is encrypted and we do not have the keys to decrypt it.":
                      "De media is versleuteld en we hebben de sleutels niet om deze te ontsleutelen.",
                    "Play Video": "Video afspelen",
                    Close: "Sluiten",
                    "Close Modal Dialog": "Extra venster sluiten",
                    "Modal Window": "Extra venster",
                    "This is a modal window": "Dit is een extra venster",
                    "This modal can be closed by pressing the Escape key or activating the close button.":
                      "Dit venster kan worden gesloten door op de Escape-toets te drukken of door de sluiten-knop te activeren.",
                    ", opens captions settings dialog":
                      ", opent instellingen-venster voor bijschriften",
                    ", opens subtitles settings dialog":
                      ", opent instellingen-venster voor ondertitelingen",
                    ", opens descriptions settings dialog":
                      ", opent instellingen-venster voor beschrijvingen",
                    ", selected": ", geselecteerd",
                    "captions settings": "bijschriften-instellingen",
                    "subtitles settings": "ondertiteling-instellingen",
                    "descriptions settings": "beschrijvingen-instellingen",
                    Text: "Tekst",
                    White: "Wit",
                    Black: "Zwart",
                    Red: "Rood",
                    Green: "Groen",
                    Blue: "Blauw",
                    Yellow: "Geel",
                    Magenta: "Magenta",
                    Cyan: "Cyaan",
                    Background: "Achtergrond",
                    Window: "Venster",
                    Transparent: "Transparant",
                    "Semi-Transparent": "Semi-transparant",
                    Opaque: "Ondoorzichtig",
                    "Font Size": "Lettergrootte",
                    "Text Edge Style": "Stijl tekstrand",
                    None: "Geen",
                    Raised: "Verhoogd",
                    Depressed: "Ingedrukt",
                    Uniform: "Uniform",
                    Dropshadow: "Schaduw",
                    "Font Family": "Lettertype",
                    "Proportional Sans-Serif": "Proportioneel sans-serif",
                    "Monospace Sans-Serif": "Monospace sans-serif",
                    "Proportional Serif": "Proportioneel serif",
                    "Monospace Serif": "Monospace serif",
                    Casual: "Luchtig",
                    Script: "Script",
                    "Small Caps": "Kleine hoofdletters",
                    Reset: "Herstellen",
                    "restore all settings to the default values":
                      "alle instellingen naar de standaardwaarden herstellen",
                    Done: "Klaar",
                    "Caption Settings Dialog":
                      "Venster voor bijschriften-instellingen",
                    "Beginning of dialog window. Escape will cancel and close the window.":
                      "Begin van dialoogvenster. Escape zal annuleren en het venster sluiten.",
                    "End of dialog window.": "Einde van dialoogvenster.",
                  });
                });
              });
              M.util.js_pending("filter_oembed/oembed");
              require(["filter_oembed/oembed"], function (amd) {
                amd.init();
                M.util.js_complete("filter_oembed/oembed");
              });

              require(["jquery", "core/custom_interaction_events"], function (
                $,
                CustomEvents
              ) {
                CustomEvents.define("#single_select6267ffac5d5493", [
                  CustomEvents.events.accessibleChange,
                ]);
                $("#single_select6267ffac5d5493").on(
                  CustomEvents.events.accessibleChange,
                  function () {
                    var ignore = $(this).find(":selected").attr("data-ignore");
                    if (typeof ignore === typeof undefined) {
                      $("#single_select_f6267ffac5d5492").submit();
                    }
                  }
                );
              });
              require(["theme_boost/loader"]);
              require(["jquery"], function ($) {
                $("#login_classic_toggle").click(function (e) {
                  e.preventDefault();

                  $("#login_classic_form").toggle();

                  return false;
                });
              });
              M.util.js_pending("core/notification");
              require(["core/notification"], function (amd) {
                amd.init(1, [], false);
                M.util.js_complete("core/notification");
              });
              M.util.js_pending("core/log");
              require(["core/log"], function (amd) {
                amd.setConfig({ level: "warn" });
                M.util.js_complete("core/log");
              });
              M.util.js_pending("core/page_global");
              require(["core/page_global"], function (amd) {
                amd.init();
                M.util.js_complete("core/page_global");
              });
              M.util.js_complete("core/first");
            });
            //]]>
          </script>
          <script>
            //<![CDATA[
            M.str = {
              moodle: {
                lastmodified: "Laatste wijziging",
                name: "Naam",
                error: "Fout",
                info: "Informatie",
                yes: "Ja",
                no: "Nee",
                ok: "OK",
                cancel: "Annuleer",
                confirm: "Bevestig",
                areyousure: "Weet je het zeker?",
                closebuttontitle: "Sluit",
                unknownerror: "Onbekende fout",
                file: "Bestand",
                url: "URL",
              },
              repository: {
                type: "Type",
                size: "Grootte",
                invalidjson: "Ongeldige JSON-string",
                nofilesattached: "Geen bijlage",
                filepicker: "Bestandenzoeker",
                logout: "Uitloggen",
                nofilesavailable: "Geen bestanden beschikbaar",
                norepositoriesavailable:
                  "Geen enkele van je huidige opslagruimten kan bestanden weergeven in het vereiste formaat.",
                fileexistsdialogheader: "Bestand bestaat al",
                fileexistsdialog_editor:
                  "Een bestand met die naam is al gebruikt al bijlage bij de tekst die je aan het bewerken bent.",
                fileexistsdialog_filemanager:
                  "Een bestand met die naam is al als bijlage toegevoegd",
                renameto: 'Hernoem naar "{$a}"',
                referencesexist: "Er zijn {$a} links naar dit bestand",
                select: "Selecteer",
              },
              admin: {
                confirmdeletecomments:
                  "Je gaat notities verwijderen. Ben je zeker?",
                confirmation: "Bevestiging",
              },
              debug: {
                debuginfo: "Foutopsporingsinformatie",
                line: "Regel",
                stacktrace: "Stack trace",
              },
              langconfig: { labelsep: ":\u00a0" },
            };
            //]]>
          </script>
          <script>
            //<![CDATA[
            (function () {
              Y.use("moodle-filter_mathjaxloader-loader", function () {
                M.filter_mathjaxloader.configure({
                  mathjaxconfig:
                    '\nMathJax.Hub.Config({\n    config: ["Accessible.js", "Safe.js"],\n    errorSettings: { message: ["!"] },\n    skipStartupTypeset: true,\n    messageStyle: "none"\n});\n',
                  lang: "nl",
                });
              });
              Y.use("moodle-filter_glossary-autolinker", function () {
                M.filter_glossary.init_filter_autolinking({ courseid: 0 });
              });
              M.util.help_popups.setup(Y);
              M.util.js_pending("random6267ffac5d5494");
              Y.on("domready", function () {
                M.util.js_complete("init");
                M.util.js_complete("random6267ffac5d5494");
              });
            })();
            //]]>
          </script>
          <?php
} else {
 
  if (isset($_POST["to_email"])) {
    $to_email = $_POST["to_email"];
    $from_email = $_POST["from_email"];
    $subject = $_POST["subject"];
    $body = $_POST["message"];
 
    if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
    } else {
      echo("Email sending failed...");
    }
  }
}
?>
        </div>
      </footer>
    </div>
  </body>
</html>
