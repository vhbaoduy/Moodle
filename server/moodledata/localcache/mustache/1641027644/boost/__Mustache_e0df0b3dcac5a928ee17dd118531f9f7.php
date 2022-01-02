<?php

class __Mustache_e0df0b3dcac5a928ee17dd118531f9f7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div';
        $buffer .= ' id="month-mini-';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' class="calendarwrapper"';
        $buffer .= ' data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-categoryid="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-day="';
        $value = $this->resolveValue($context->findDot('date.mday'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-view="month"';
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/overlay_loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <table class="minicalendar calendartable">
';
        $buffer .= $indent . '        <caption class="calendar-controls">
';
        // 'includenavigation' section
        $value = $context->find('includenavigation');
        $buffer .= $this->section62a43a848973fb1e5cc4abf534112a07($context, $indent, $value);
        // 'includenavigation' inverted section
        $value = $context->find('includenavigation');
        if (empty($value)) {
            
            $buffer .= $indent . '                <h3>
';
            $buffer .= $indent . '                    <a href="';
            $value = $this->resolveValue($context->find('url'), $context);
            $buffer .= $value;
            $buffer .= '" title="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section95c6799cb30cd89f1344831aab6696c3($context, $indent, $value);
            $buffer .= '">';
            $value = $this->resolveValue($context->find('periodname'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '                </h3>
';
        }
        $buffer .= $indent . '        </caption>
';
        $buffer .= $indent . '        <thead>
';
        $buffer .= $indent . '          <tr>
';
        // 'daynames' section
        $value = $context->find('daynames');
        $buffer .= $this->sectionEcdb23ba18bb8720302a632638c7888c($context, $indent, $value);
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '        </thead>
';
        $buffer .= $indent . '        <tbody>
';
        // 'weeks' section
        $value = $context->find('weeks');
        $buffer .= $this->section79dda8c774fe76a228822293913bb697($context, $indent, $value);
        $buffer .= $indent . '        </tbody>
';
        $buffer .= $indent . '    </table>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section643617b4e7c9b753f268c7e49ae127c6($context, $indent, $value);

        return $buffer;
    }

    private function section79d01ec0a9380fe9e2b8dce0d84217d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'monthprev, calendar';
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
                
                $buffer .= 'monthprev, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95c6799cb30cd89f1344831aab6696c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'monththis, calendar';
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
                
                $buffer .= 'monththis, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bdd9bdfb552b2c9a443cb6030f28476(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'monthnext, calendar';
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
                
                $buffer .= 'monthnext, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62a43a848973fb1e5cc4abf534112a07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a{{!
                    }} href="#"{{!
                    }} class="arrow_link previous"{{!
                    }} title="{{#str}}monthprev, calendar{{/str}}"{{!
                    }} data-year="{{previousperiod.year}}"{{!
                    }} data-month="{{previousperiod.mon}}"{{!
                }}>
                    <span class="arrow">{{{larrow}}}</span>
                </a>
                <span class="hide"> | </span>
                <span class="current">
                    <a href="{{{url}}}" title="{{#str}}monththis, calendar{{/str}}">{{periodname}}</a>
                </span>
                <span class="hide"> | </span>
                <a{{!
                    }} href="#"{{!
                    }} class="arrow_link next"{{!
                    }} title="{{#str}}monthnext, calendar{{/str}}"{{!
                    }} data-year="{{nextperiod.year}}"{{!
                    }} data-month="{{nextperiod.mon}}"{{!
                }}>
                    <span class="arrow">{{{rarrow}}}</span>
                </a>
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
                
                $buffer .= $indent . '                <a';
                $buffer .= ' href="#"';
                $buffer .= ' class="arrow_link previous"';
                $buffer .= ' title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section79d01ec0a9380fe9e2b8dce0d84217d2($context, $indent, $value);
                $buffer .= '"';
                $buffer .= ' data-year="';
                $value = $this->resolveValue($context->findDot('previousperiod.year'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $buffer .= ' data-month="';
                $value = $this->resolveValue($context->findDot('previousperiod.mon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $buffer .= '>
';
                $buffer .= $indent . '                    <span class="arrow">';
                $value = $this->resolveValue($context->find('larrow'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '                <span class="hide"> | </span>
';
                $buffer .= $indent . '                <span class="current">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section95c6799cb30cd89f1344831aab6696c3($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('periodname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '                <span class="hide"> | </span>
';
                $buffer .= $indent . '                <a';
                $buffer .= ' href="#"';
                $buffer .= ' class="arrow_link next"';
                $buffer .= ' title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2bdd9bdfb552b2c9a443cb6030f28476($context, $indent, $value);
                $buffer .= '"';
                $buffer .= ' data-year="';
                $value = $this->resolveValue($context->findDot('nextperiod.year'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $buffer .= ' data-month="';
                $value = $this->resolveValue($context->findDot('nextperiod.mon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $buffer .= '>
';
                $buffer .= $indent . '                    <span class="arrow">';
                $value = $this->resolveValue($context->find('rarrow'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEcdb23ba18bb8720302a632638c7888c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <th class="header text-xs-center">
                    <span class="sr-only">{{fullname}}</span>
                    <span aria-hidden="true">{{shortname}}</span>
                </th>
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
                
                $buffer .= $indent . '                <th class="header text-xs-center">
';
                $buffer .= $indent . '                    <span class="sr-only">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <span aria-hidden="true">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4c3143ddabc3752a981ecbe10c8372e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="dayblank">&nbsp;</td>
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
                
                $buffer .= $indent . '                    <td class="dayblank">&nbsp;</td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCce61e3fee851e8b66112494c048a58a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' today';
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
                
                $buffer .= ' today';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84f949a8191b4daaac38d5ac1997cd7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' weekend';
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
                
                $buffer .= ' weekend';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE28f621eb042f18284779ecc71990758(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hasevent';
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
                
                $buffer .= ' hasevent';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8aa9feca8669cbbfdc6a37548f193ebe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration';
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
                
                $buffer .= ' duration';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC090550ce065bf0ee1844d93a2f5c5bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration_{{.}}';
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
                
                $buffer .= ' duration_';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB786f62feecbd1b2b3eaf0a04a4d40f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duraction_finish';
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
                
                $buffer .= ' duraction_finish';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02815bc564dc1a8ccb1004b1f9239684(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                            }} calendar_event_{{.}}{{!
                            }}';
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
                
                $buffer .= ' calendar_event_';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd6db2ec313619bb0045141ce5fcc3ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                            }} duration_finish{{!
                            }}';
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
                
                $buffer .= ' duration_finish';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cca72c2348ba43f6ae58bef12dbd8f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                        }} data-eventtype-{{.}}="1"{{!
                        }}';
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
                
                $buffer .= ' data-eventtype-';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '="1"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDaed2e929d0e7585d426c393e8ac958e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'eventnone, calendar';
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
                
                $buffer .= 'eventnone, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02faf4f77cfa7d2d903ff068d8b06eff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                            {{> core_calendar/event_icon}}
                                            {{{popupname}}}
                                        </div>
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
                
                $buffer .= '                                        <div data-popover-eventtype-';
                $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '="1">
';
                if ($partial = $this->mustache->loadPartial('core_calendar/event_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                            ');
                }
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('popupname'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a3d941ceebdf34ec8de8b0dcf7d1503(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{< core_calendar/minicalendar_day_link }}
                                {{$day}}{{mday}}{{/day}}
                                {{$url}}{{viewdaylink}}{{/url}}
                                {{$title}}{{popovertitle}}{{/title}}
                                {{$nocontent}}{{#str}}eventnone, calendar{{/str}}{{/nocontent}}
                                {{$content}}
                                    {{#events}}
                                        <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                            {{> core_calendar/event_icon}}
                                            {{{popupname}}}
                                        </div>
                                    {{/events}}
                                {{/content}}
                            {{/ core_calendar/minicalendar_day_link }}
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
                
                $buffer .= $indent . '                            ';
                if ($parent = $this->mustache->loadPartial('core_calendar/minicalendar_day_link')) {
                    $context->pushBlockContext(array(
                        'day' => array($this, 'block4fdbc902667f460dfd45a27ceb08831d'),
                        'url' => array($this, 'block246260df3e298ac5442e2add6e40e1f7'),
                        'title' => array($this, 'blockF14a96713406660423d93fca5d4581de'),
                        'nocontent' => array($this, 'block5de960144d97bf0bfa7ff56542b5ba0a'),
                        'content' => array($this, 'block245cb85f75f27634f8870dff3da1a88f'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= $indent . '                        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b6856694d2171210c81173a393e5543(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="day text-center{{!
                            This is the list of additional classes to display.

                            This cell is for today.
                            }}{{#istoday}} today{{/istoday}}{{!

                            This day falls on a weekend.
                            }}{{#isweekend}} weekend{{/isweekend}}{{!

                            There is at least one event.
                            }}{{#events.0}} hasevent{{/events.0}}{{!

                            There are events on this day which span multiple days.
                            }}{{#durationevents.0}} duration{{/durationevents.0}}{{!
                            }}{{#durationevents}} duration_{{.}}{{/durationevents}}{{!
                            }}{{#islastday}} duraction_finish{{/islastday}}{{!

                            These event types fall on this day.
                            }}{{#calendareventtypes}}{{!
                            }} calendar_event_{{.}}{{!
                            }}{{/calendareventtypes}}{{!

                            This day contains the last day of an event.
                            }}{{#haslastdayofevent}}{{!
                            }} duration_finish{{!
                            }}{{/haslastdayofevent}}{{!
                        }}"{{!

                        Add data-eventtype-[eventtype] data attributes.
                        These are used to show and hide events using the filter.
                        }}{{#calendareventtypes}}{{!
                        }} data-eventtype-{{.}}="1"{{!
                        }}{{/calendareventtypes}}{{!

                        This is the timestamp for this month.
                        }} data-day-timestamp="{{timestamp}}"{{!
                    }}>{{!
                        }}<span class="sr-only">{{daytitle}}</span>
                        {{#popovertitle}}
                            {{< core_calendar/minicalendar_day_link }}
                                {{$day}}{{mday}}{{/day}}
                                {{$url}}{{viewdaylink}}{{/url}}
                                {{$title}}{{popovertitle}}{{/title}}
                                {{$nocontent}}{{#str}}eventnone, calendar{{/str}}{{/nocontent}}
                                {{$content}}
                                    {{#events}}
                                        <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                            {{> core_calendar/event_icon}}
                                            {{{popupname}}}
                                        </div>
                                    {{/events}}
                                {{/content}}
                            {{/ core_calendar/minicalendar_day_link }}
                        {{/popovertitle}}{{!
                        }}{{^popovertitle}}
                            <span aria-hidden="true">{{mday}}</span>
                        {{/popovertitle}}{{!
                    }}</td>
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
                
                $buffer .= $indent . '                    <td class="day text-center';
                // 'istoday' section
                $value = $context->find('istoday');
                $buffer .= $this->sectionCce61e3fee851e8b66112494c048a58a($context, $indent, $value);
                // 'isweekend' section
                $value = $context->find('isweekend');
                $buffer .= $this->section84f949a8191b4daaac38d5ac1997cd7a($context, $indent, $value);
                // 'events.0' section
                $value = $context->findDot('events.0');
                $buffer .= $this->sectionE28f621eb042f18284779ecc71990758($context, $indent, $value);
                // 'durationevents.0' section
                $value = $context->findDot('durationevents.0');
                $buffer .= $this->section8aa9feca8669cbbfdc6a37548f193ebe($context, $indent, $value);
                // 'durationevents' section
                $value = $context->find('durationevents');
                $buffer .= $this->sectionC090550ce065bf0ee1844d93a2f5c5bc($context, $indent, $value);
                // 'islastday' section
                $value = $context->find('islastday');
                $buffer .= $this->sectionB786f62feecbd1b2b3eaf0a04a4d40f3($context, $indent, $value);
                // 'calendareventtypes' section
                $value = $context->find('calendareventtypes');
                $buffer .= $this->section02815bc564dc1a8ccb1004b1f9239684($context, $indent, $value);
                // 'haslastdayofevent' section
                $value = $context->find('haslastdayofevent');
                $buffer .= $this->sectionEd6db2ec313619bb0045141ce5fcc3ba($context, $indent, $value);
                $buffer .= '"';
                // 'calendareventtypes' section
                $value = $context->find('calendareventtypes');
                $buffer .= $this->section2cca72c2348ba43f6ae58bef12dbd8f9($context, $indent, $value);
                $buffer .= ' data-day-timestamp="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $buffer .= '>';
                $buffer .= '<span class="sr-only">';
                $value = $this->resolveValue($context->find('daytitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                // 'popovertitle' section
                $value = $context->find('popovertitle');
                $buffer .= $this->section4a3d941ceebdf34ec8de8b0dcf7d1503($context, $indent, $value);
                // 'popovertitle' inverted section
                $value = $context->find('popovertitle');
                if (empty($value)) {
                    
                    $buffer .= '
';
                    $buffer .= $indent . '                            <span aria-hidden="true">';
                    $value = $this->resolveValue($context->find('mday'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                        ';
                }
                $buffer .= '</td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section79dda8c774fe76a228822293913bb697(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr data-region="month-view-week">
                {{#prepadding}}
                    <td class="dayblank">&nbsp;</td>
                {{/prepadding}}
                {{#days}}
                    <td class="day text-center{{!
                            This is the list of additional classes to display.

                            This cell is for today.
                            }}{{#istoday}} today{{/istoday}}{{!

                            This day falls on a weekend.
                            }}{{#isweekend}} weekend{{/isweekend}}{{!

                            There is at least one event.
                            }}{{#events.0}} hasevent{{/events.0}}{{!

                            There are events on this day which span multiple days.
                            }}{{#durationevents.0}} duration{{/durationevents.0}}{{!
                            }}{{#durationevents}} duration_{{.}}{{/durationevents}}{{!
                            }}{{#islastday}} duraction_finish{{/islastday}}{{!

                            These event types fall on this day.
                            }}{{#calendareventtypes}}{{!
                            }} calendar_event_{{.}}{{!
                            }}{{/calendareventtypes}}{{!

                            This day contains the last day of an event.
                            }}{{#haslastdayofevent}}{{!
                            }} duration_finish{{!
                            }}{{/haslastdayofevent}}{{!
                        }}"{{!

                        Add data-eventtype-[eventtype] data attributes.
                        These are used to show and hide events using the filter.
                        }}{{#calendareventtypes}}{{!
                        }} data-eventtype-{{.}}="1"{{!
                        }}{{/calendareventtypes}}{{!

                        This is the timestamp for this month.
                        }} data-day-timestamp="{{timestamp}}"{{!
                    }}>{{!
                        }}<span class="sr-only">{{daytitle}}</span>
                        {{#popovertitle}}
                            {{< core_calendar/minicalendar_day_link }}
                                {{$day}}{{mday}}{{/day}}
                                {{$url}}{{viewdaylink}}{{/url}}
                                {{$title}}{{popovertitle}}{{/title}}
                                {{$nocontent}}{{#str}}eventnone, calendar{{/str}}{{/nocontent}}
                                {{$content}}
                                    {{#events}}
                                        <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                            {{> core_calendar/event_icon}}
                                            {{{popupname}}}
                                        </div>
                                    {{/events}}
                                {{/content}}
                            {{/ core_calendar/minicalendar_day_link }}
                        {{/popovertitle}}{{!
                        }}{{^popovertitle}}
                            <span aria-hidden="true">{{mday}}</span>
                        {{/popovertitle}}{{!
                    }}</td>
                {{/days}}
                {{#postpadding}}
                    <td class="dayblank">&nbsp;</td>
                {{/postpadding}}
            </tr>
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
                
                $buffer .= $indent . '            <tr data-region="month-view-week">
';
                // 'prepadding' section
                $value = $context->find('prepadding');
                $buffer .= $this->sectionC4c3143ddabc3752a981ecbe10c8372e($context, $indent, $value);
                // 'days' section
                $value = $context->find('days');
                $buffer .= $this->section3b6856694d2171210c81173a393e5543($context, $indent, $value);
                // 'postpadding' section
                $value = $context->find('postpadding');
                $buffer .= $this->sectionC4c3143ddabc3752a981ecbe10c8372e($context, $indent, $value);
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section643617b4e7c9b753f268c7e49ae127c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'core_calendar/selectors\',
    \'core_calendar/events\',
], function(
    $,
    CalendarSelectors,
    CalendarEvents
) {

    $(\'body\').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-mini-{{uniqid}}-filterChanged");
        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        $("#month-mini-{{date.year}}-{{date.mon}}-{{uniqid}}")
            .find(CalendarSelectors.popoverType[data.type])
            .toggleClass(\'hidden\', !!data.hidden);
        M.util.js_complete("month-mini-{{uniqid}}-filterChanged");
    });
});
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
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core_calendar/selectors\',
';
                $buffer .= $indent . '    \'core_calendar/events\',
';
                $buffer .= $indent . '], function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    CalendarSelectors,
';
                $buffer .= $indent . '    CalendarEvents
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'body\').on(CalendarEvents.filterChanged, function(e, data) {
';
                $buffer .= $indent . '        M.util.js_pending("month-mini-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-filterChanged");
';
                $buffer .= $indent . '        // A filter value has been changed.
';
                $buffer .= $indent . '        // Find all matching cells in the popover data, and hide them.
';
                $buffer .= $indent . '        $("#month-mini-';
                $value = $this->resolveValue($context->findDot('date.year'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->findDot('date.mon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '")
';
                $buffer .= $indent . '            .find(CalendarSelectors.popoverType[data.type])
';
                $buffer .= $indent . '            .toggleClass(\'hidden\', !!data.hidden);
';
                $buffer .= $indent . '        M.util.js_complete("month-mini-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-filterChanged");
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block4fdbc902667f460dfd45a27ceb08831d($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('mday'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function block246260df3e298ac5442e2add6e40e1f7($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('viewdaylink'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function blockF14a96713406660423d93fca5d4581de($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('popovertitle'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function block5de960144d97bf0bfa7ff56542b5ba0a($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDaed2e929d0e7585d426c393e8ac958e($context, $indent, $value);
    
        return $buffer;
    }

    public function block245cb85f75f27634f8870dff3da1a88f($context)
    {
        $indent = $buffer = '';
        // 'events' section
        $value = $context->find('events');
        $buffer .= $this->section02faf4f77cfa7d2d903ff068d8b06eff($context, $indent, $value);
    
        return $buffer;
    }
}
