<?php

class __Mustache_0bf5cf1ab8f7dd0c8ec28fdbb182e2ac extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section')) {
            $context->pushBlockContext(array(
                'region' => array($this, 'block20c51b28057bc9faaeafe6f632069c2d'),
                'title' => array($this, 'block1aa2fb377211d94359156e376f1b4753'),
                'placeholder' => array($this, 'blockF2ca03fecb95f213685459140a6ae494'),
                'emptymessage' => array($this, 'block15257dde18dafd9b6b7b4055f15b6976'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section0e294840ed8efb1916cf4e3c314868bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' groupconversations, core_message ';
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
                
                $buffer .= ' groupconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5914da41773e98b58b47f202d261c9b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nogroupconversations, core_message ';
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
                
                $buffer .= ' nogroupconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block20c51b28057bc9faaeafe6f632069c2d($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'view-overview-group-messages';
    
        return $buffer;
    }

    public function block1aa2fb377211d94359156e376f1b4753($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0e294840ed8efb1916cf4e3c314868bd($context, $indent, $value);
    
        return $buffer;
    }

    public function blockF2ca03fecb95f213685459140a6ae494($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <div class="text-center py-2">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
    
        return $buffer;
    }

    public function block15257dde18dafd9b6b7b4055f15b6976($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <p class="text-muted mt-2">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5914da41773e98b58b47f202d261c9b8($context, $indent, $value);
        $buffer .= '</p>
';
    
        return $buffer;
    }
}
