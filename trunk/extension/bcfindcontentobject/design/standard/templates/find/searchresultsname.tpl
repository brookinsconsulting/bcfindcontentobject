
{set-block scope=root variable=cache_ttl}0{/set-block}

{if $search_string|ne( '' )}
  <h2>Search name string: {$search_string}</h2>
  <hr />

  {def $results_specific=$results.result}
  {foreach $results_specific as $res}
     <a href={concat( 'http://', ezsys( 'hostname' ), '/', $res.0.url_alias)}>/{$res.0.url_alias}</a><br />
  {/foreach}
{/if}
<br />


