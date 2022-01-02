<?php

class __Mustache_d750777a7df386f350fc38ec84b48303 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_lazy_load_list')) {
            $context->pushBlockContext(array(
                'emptymessage' => array($this, 'block539db191e1d910c0fb2023a2e3c34151'),
                'placeholder' => array($this, 'block0aa7806b3ce7e5e484f7645eaf1dee92'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section2b767af6e1d621ba662cc2f533844b46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocontactsgetstarted, core_message ';
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
                
                $buffer .= $indent . ' nocontactsgetstarted, core_message ';
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

    private function section2f54883e1fe5956f228545b906d54552(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#sectioncontacts}}
                {{#placeholders}}
                    {{> core_message/message_drawer_contacts_list_item_placeholder }}
                {{/placeholders}}
            {{/sectioncontacts}}
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
                
                // 'sectioncontacts' section
                $value = $context->find('sectioncontacts');
                $buffer .= $this->section9dfb54734f40cd6d3edfdd2a69dfe244($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block539db191e1d910c0fb2023a2e3c34151($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2b767af6e1d621ba662cc2f533844b46($context, $indent, $value);
    
        return $buffer;
    }

    public function block0aa7806b3ce7e5e484f7645eaf1dee92($context)
    {
        $indent = $buffer = '';
        // 'contacts' section
        $value = $context->find('contacts');
        $buffer .= $this->section2f54883e1fe5956f228545b906d54552($context, $indent, $value);
    
        return $buffer;
    }
}
