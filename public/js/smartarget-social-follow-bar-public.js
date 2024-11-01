function init_social_follow_bar (hash)
{
	if (!hash)
	{
		return;
	}

	insertJs_social_follow_bar(hash);
}

function insertJs_social_follow_bar (hash)
{
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = `https://smartarget.online/loader.js?ver=${Math.random()}&u=${hash}&source=wordpress_social_follow_bar`;
	document.head.appendChild(script);
}

init_social_follow_bar(smartarget_social_follow_bar_params.hash);
