<!DOCTYPE html>
<html>
<head>
<?php echo $header?>
</head>
<body<?php echo $body_style.$direction?>>

<div class="navbar">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/index.html">
                    <img alt="Brand" href="/index.html" src="/img/SPELLWebsite-header_revised.png" style="max-height:35px">
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="/content/Math/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Math <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/content/Math/Addition%20and%20Subtraction/">Addition and Subtraction</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Math/Decimals/">Decimals</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Math/Fractions/">Fractions</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Math/Multiplication%20and%20Division/">Multiplication and Division</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Math/Negative%20Numbers%20and%20Absolute%20Values/">Negative Numbers and Absolute Values</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Math/Telling%20Time/">Telling Time</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/content/Science/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Science<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/content/Science/Agriculture%20for%20Island/">Agriculture for Islands</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Science/Earth%20and%20Space/">Earth and Space</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Science/Human%20Body/">Human Body</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Science/Life%20Science/">Life Science</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Science/Physical%20Science/">Physical Science</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/content/Language%20Arts/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Language Arts <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/content/Language%20Arts/English%20Grammar/">English Grammar</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Language%20Arts/Story%20Books/">Story Books</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Language%20Arts/Teaching%20Resources/">Teaching Resources</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/content/Local%20Topics/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Local Topics<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/content/Local%20Topics/Micronesia/">Micronesia</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Local%20Topics/Vanuatu/">Vanuatu</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/content/Health%20and%20Safety/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Health and Safety<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/content/Health%20and%20Safety/Awareness/">Awareness</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Health%20and%20Safety/Boat%20Safety/">Boat Safety</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Health%20and%20Safety/Health%20PDFs/">Health PDFs</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Health%20and%20Safety/Natural%20Disaster%20Management/">Natural Disaster Management</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Health%20and%20Safety/Safety/">Safety</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/content/Environment/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Environment<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/content/Environment/Adapting%20to%20Climate%20Change/">Adapting to Climate Change</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Environment/Climate%20Change%20Info/">Climate Change Info</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Environment/Geography/">Geography</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Environment/Natural%20Disasters/">Natural Disasters</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Environment/Waste%20Facts/">Waste Facts</a></li>
                            <li class="divider"></li>
                            <li><a href="/content/Environment/Wildlife/">Wildlife</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Encyclopedias<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/med/">Medical Encyclopedia</a></li>
                            <li class="divider"></li>
                            <li><a href="/Wikipedia/">Wikipedia</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="<?php echo $container.$container_style ?>">
<?php is_error($options) ?>
<?php echo $breadcrumbs?>
<?php echo $search ?>
<?php echo $responsive_open?>
      <table id="listr-table" class="table <?php echo $options['bootstrap']['table_style']?>">
        <thead>
          <tr>
<?php echo $table_header?>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <td colspan="<?php echo $table_count+1?>">
              <small class="pull-<?php echo $left?> text-muted" dir="ltr"><?php echo $summary ?></small>
              <?php echo $kudos?>
            </td>
          </tr>
        </tfoot>
        <tbody>
<?php echo $table_body?>
        </tbody>
      </table>
<?php echo $responsive_close?>
<?php if ($options['general']['enable_viewer']) { ?>
    <div class="modal fade" id="viewer-modal" tabindex="-1" role="dialog" aria-labelledby="file-name" aria-hidden="true">
      <div class="modal-dialog <?php echo $modal_size ?>">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close pull-<?php echo $right?>" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-<?php echo $left?>" id="file-name">&nbsp;</h4>
            <small class="text-muted" id="file-meta"></small>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
<?php if (($options['general']['enable_highlight'])) { ?>
            <div class="pull-<?php echo $left?>">
              <button type="button" class="btn <?php echo $btn_highlight ?> highlight hidden-xs-up"><?php echo _('Apply syntax highlighting')?></button>
            </div>
<?php } ?>
            <div class="pull-<?php echo $right?>">
              <button type="button" class="btn <?php echo $btn_default ?>" data-dismiss="modal"><?php echo _('Close')?></button>
<?php if ($options['general']['share_button']) { ?>
              <div class="btn-group">
                <a class="btn <?php echo $btn_primary ?> fullview" data-button="<?php echo _('Open')?>" role="button">
                </a>
                <button type="button" class="btn <?php echo $btn_primary ?> dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
<?php if ($options['keys']['dropbox'] !== null ) { ?>
                  <li role="presentation"><a role="menuitem" class="save-dropbox"><?php echo $icons_dropbox._('Save to Dropbox')?></a></li>
                  <li role="presentation" class="divider"></li>
<?php } ?>
                  <li role="presentation"><a role="menuitem" class="email-link"><?php echo $icons_email ?>Email</a></li>
                  <li role="presentation"><a role="menuitem" class="facebook-link"><?php echo $icons_facebook ?>Facebook</a></li>
                  <li role="presentation"><a role="menuitem" class="google-link"><?php echo $icons_gplus ?>Google+</a></li>
                  <li role="presentation"><a role="menuitem" class="twitter-link"><?php echo $icons_twitter ?>Twitter</a></li>
                </ul>
              </div>
<?php } else { ?>
            <a class="btn <?php echo $btn_primary ?> fullview" data-button="<?php echo _('Open')?>" role="button"></a>
<?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php } ?>
  </div>
<?php echo $footer?>
</body>
</html>
