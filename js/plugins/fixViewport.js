const fixViewport = () => {

  const userAgent = navigator.userAgent.toLowerCase();

  const isIpod = userAgent.includes( 'ipod' );
  const isIphone = userAgent.includes( 'iphone' );
  const isIphoneOS = userAgent.includes( 'iphone os' );
  const isIpad = userAgent.includes( 'ipad' );
  const isWebOS = userAgent.includes( 'webos' );
  const isAndroid = userAgent.includes( 'android' );
  const isLinux = userAgent.includes( 'linux' );

  const viewport = document.querySelector( '[name="viewport"]' );
  const getViewport = viewport.getAttribute( 'content' );
  const blockedScalling = ', maximum-scale=1.0, user-scalable=0';

  const checkIPhone = isIpod || isIphone || isIphoneOS || isIpad || isWebOS;

  let newViewport;

  const setContent = content => {
      viewport.setAttribute( 'content', content );
  };

  if( checkIPhone ) {
      newViewport = getViewport + blockedScalling;
      setContent( newViewport );
  }

  return false;

};
fixViewport();