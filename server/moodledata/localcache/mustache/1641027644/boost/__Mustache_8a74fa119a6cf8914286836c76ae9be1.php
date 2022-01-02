<?php

class __Mustache_8a74fa119a6cf8914286836c76ae9be1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<p class="mb-1">
';
        $buffer .= $indent . '    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC42978d344ae7cd356640ca4356c2657($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</p>
';
        $buffer .= $indent . '<ul>
';
        // 'licenses' section
        $value = $context->find('licenses');
        $buffer .= $this->section5d7df281b9c8a3f03975d0a37616b127($context, $indent, $value);
        // 'licenses' inverted section
        $value = $context->find('licenses');
        if (empty($value)) {
            
            $buffer .= $indent . '    <li>
';
            $buffer .= $indent . '        ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section73efe928fc20f9e7c2c524606e0568b3($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </li>
';
        }
        $buffer .= $indent . '</ul>
';

        return $buffer;
    }

    private function sectionC42978d344ae7cd356640ca4356c2657(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chooselicense_help, repository';
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
                
                $buffer .= 'chooselicense_help, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d7df281b9c8a3f03975d0a37616b127(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li>
        <a href="{{source}}" target="_blank">{{fullname}}</a>
    </li>
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
                
                $buffer .= $indent . '    <li>
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('source'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73efe928fc20f9e7c2c524606e0568b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nolicenses, repository';
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
                
                $buffer .= 'nolicenses, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
