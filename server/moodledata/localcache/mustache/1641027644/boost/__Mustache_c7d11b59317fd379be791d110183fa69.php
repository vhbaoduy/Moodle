<?php

class __Mustache_c7d11b59317fd379be791d110183fa69 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_lazy_load_list')) {
            $context->pushBlockContext(array(
                'emptymessage' => array($this, 'block61486c8a10bd231d1f5d10238cb51160'),
                'placeholder' => array($this, 'blockF93fb5291fc8acc82554a31c1c9ac2f8'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionEaabe79884485ccf4eeb5f7a5595d87a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocontactrequests, core_message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' nocontactrequests, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section084eef2c431ba5ae3219bd1c27b59b13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core_message/message_drawer_contacts_list_item_placeholder }}
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_message/message_drawer_contacts_list_item_placeholder')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dfb54734f40cd6d3edfdd2a69dfe244(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#placeholders}}
                    {{> core_message/message_drawer_contacts_list_item_placeholder }}
                {{/placeholders}}
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'placeholders' section
                $value = $context->find('placeholders');
                $buffer .= $this->section084eef2c431ba5ae3219bd1c27b59b13($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74700341dbcd9459597c64bf4a80eee2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#sectionrequests}}
                {{#placeholders}}
                    {{> core_message/message_drawer_contacts_list_item_placeholder }}
                {{/placeholders}}
            {{/sectionrequests}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'sectionrequests' section
                $value = $context->find('sectionrequests');
                $buffer .= $this->section9dfb54734f40cd6d3edfdd2a69dfe244($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block61486c8a10bd231d1f5d10238cb51160($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEaabe79884485ccf4eeb5f7a5595d87a($context, $indent, $value);
    
        return $buffer;
    }

    public function blockF93fb5291fc8acc82554a31c1c9ac2f8($context)
    {
        $indent = $buffer = '';
        // 'contacts' section
        $value = $context->find('contacts');
        $buffer .= $this->section74700341dbcd9459597c64bf4a80eee2($context, $indent, $value);
    
        return $buffer;
    }
}
