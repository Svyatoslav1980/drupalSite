<?php
print " ";
print render($node->body['und'][0]['value']);

if($node->type == 'webform'){
    hide($content['field_contact_header']);
    hide($content['field_contact_subheader']);
    print render($content);
}
