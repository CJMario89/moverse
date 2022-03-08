<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
    <head>
        <link rel="icon" href="{{asset('images/moverse.jpg')}}" sizes="any" type="image/svg+xml">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            html{
                width: 100%;
                height: 100%;
            }
            /*@font-face {
                font-family: "cyberPunk";
                src: url("/css/font/Cyberpunk.woff") format('woff');
            }*/
            @font-face {
                font-family: "cyberPunk";
                src: url("/css/font/CIND.woff") format('woff');
            }
            body{
                margin: 0 auto;
                background-color: black;
                font-family: cyberPunk;
                padding-top: 50px;
            }
            .enterButton{
                position: absolute;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                margin: 0 auto;
                width: 200px;
                height: 50px;
                top: 85%;
                left: 50%;
                transform: translate(-50%, -50%);
                border: solid 1px #ffffff;
                color: #ffffff;
                font-size: 32px;
                user-select: none;
                text-shadow: 0 0 10px #ffffff;
                box-shadow: 0 0 10px #ffffff;
                border-radius: 10px;
                padding-top: 5px;
                cursor:pointer;
            }
            .showEnter{
                cursor: pointer;
                visibility: visible;
                opacity: 1;
                visibility: none;
            }
            .navbar{
                position: fixed;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                margin: 0 auto;
                top: 0%;
                left: 0%;
                color: #ffffff;
                user-select: none;
                cursor: default;
                text-shadow: 0 0 10px #ffffff;
                box-shadow: 0 0 10px #ffffff;
                background-color: black;
                width: 100%;
                height: 50px;
            }
            .footer{
                position: fixed;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                margin: 0 auto;
                bottom: 0%;
                left: 0%;
                color: #ffffff;
                user-select: none;
                cursor: default;
                text-shadow: 0 0 10px #ffffff;
                box-shadow: 0 0 10px #ffffff;
                background-color: black;
                width: 100%;
                height: 50px;
                font-size: 20px;
            }
            .moverse{
                position: relative;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                color: #ffffff;
                font-size: 30px;
                user-select: none;
                cursor: default;
                margin-left: 15px;
                margin-top: 5px;
                cursor: pointer;
            }
            .menu{
                display: none;
            }
            .menuContainer{
                display: flex;
                flex-direction: row;
                justify-content: end;
                align-items: center;
            }
            .option{
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 10px;
                margin-right: 3%;
                margin-top: 15px;
                font-size: 18px;
            }
            .socialLinks{
                display: flex;
                align-items: center;
            }
            .socialLink{
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 10px;
            }
            

            @media screen and (max-width: 768px){
                .menu{
                    position: relative;
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                    color: #ffffff;
                    font-size: 32px;
                    user-select: none;
                    cursor: pointer;
                    margin-right: 15px;
                    margin-top: 5px;
                }
                .menuContainer{
                    position: fixed;
                    display: flex;
                    top: 10%;
                    height: 90%;
                    width: 100%;
                    opacity: 0;
                    visibility: hidden;
                    z-index: -1;
                }
            }
        </style>
    </head>
    <body>
        <div class="navbar">
            <div class="moverse">MOVERSE</div>
            <div class="menu">
                MENU
            </div>
            <div class="menuContainer">
                <div class="option">
                    HOME
                </div>
                <div class="option">
                    GALLERYS
                </div>
                <div class="option">
                    STORIES
                </div>
                <div class="option">
                    ROADMAP
                </div>
                <div class="socialLinks">
                    <a class="socialLink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                     <a class="socialLink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                            <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                        </svg>
                    </a>
                    <a class="socialLink">
                        <img src="/images/opensea.svg" width="24" height="24">
                    </a>
                </div>
            </div>
            
        </div>
        <div class="enterButton">ENTER</div>
        <div class="footer">
            <div class="esg">
                ESG: --$
            </div>
            <div class="hihealth">
                Hihealth point: 0
            </div>
            <div class="mint">
                Calories burned: 0
            </div>
        </div>
        {{-- <video id="video" playsinline muted loop autoplay width="320" height="240" src="/videos/video.mp4" style="display:none;"></video> --}}

    </body>
    <script>
        var moverse = document.querySelector(".moverse");
        moverse.addEventListener("click", function(){
            window.location = "{{url('/')}}";
        })
    </script>
    <script type="module">
        import * as THREE from '/node_modules/three/build/three.module.js';
        import {OrbitControls} from '/node_modules/three/examples/jsm/controls/OrbitControls.js';
        import Stats from '/node_modules/three/examples/jsm/libs/stats.module.js';
        import { GLTFLoader } from '/node_modules/three/examples/jsm/loaders/GLTFLoader.js';
        import { EffectComposer } from '/node_modules/three/examples/jsm/postprocessing/EffectComposer.js';
        import { RenderPass } from '/node_modules/three/examples/jsm/postprocessing/RenderPass.js';
        import { UnrealBloomPass } from '/node_modules/three/examples/jsm/postprocessing/UnrealBloomPass.js';


        //camera
        var windowInnerHeight = window.innerHeight -100;
        var camera = new THREE.PerspectiveCamera(70, window.innerWidth/windowInnerHeight, 0.01, 500);
        
        
        var scene = new THREE.Scene();

        

        //render
        const render = new THREE.WebGLRenderer();
        render.setSize(window.innerWidth, windowInnerHeight);
        render.setClearColor(0x191970);
        document.body.appendChild(render.domElement);

        {{-- let axes = new THREE.AxesHelper(20) // 參數為座標軸長度
        scene.add(axes); --}}

        //control
        //initial
        let control = new OrbitControls(camera, render.domElement);
        control.enableDamping = true // 啟用阻尼效果
        control.dampingFactor = 0.4 // 阻尼系數


        initControl();
        //streetControl();
        //loadStreetView();
        addPlane();


        function initControl(){
            camera.position.set(160, 50, 0);//initial view
            //camera.position.set(-21, 38, -21);//initial view
            var initLook = new THREE.Vector3(0, 65, 0);//initial view
            control.target = initLook;
            control.enableZoom = false;
            control.enablePan = false;
            control.autoRotate = true;
            control.autoRotateSpeed = 0.3;
            control.minPolarAngle = Math.PI * 63 / 128;
            control.maxPolarAngle = Math.PI * 67 / 128;
        }

        function streetControl(){
            camera.position.set(0.5, 0.1, 0);//street view
            //camera.position.set(2, 22, 2);
            var initLook = new THREE.Vector3(0, 0.5, 0);//street view
            scene.fog = new THREE.Fog(0x191970, 50, 100);
            //control.target = new THREE.Vector3(0, 3, 0);
            control.target = initLook;
            control.enabled = true;
            control.enableZoom = false;
            control.enablePan = false;
            control.autoRotate = false;
            control.autoRotateSpeed = 0.1;
            control.minPolarAngle = Math.PI * 8 / 16;
            control.maxPolarAngle = Math.PI * 37 / 64;
        }


        //addPlane();
        addPointLight();
        scene.fog = new THREE.Fog(0x191970, 130, 170);
        //FPS
        //addSpaceShuttle();
        addAirShip();
        addCityView();
        //TP
        addCubic();
        addMoverse();
        add_neon_signs_street();
        add_taiwan_style_signboard_lowpoly();
        addStar();

        addFloor();
        //add_soda_vending_machine();
        add_stairs__road_2_nowhere__free_3d_low_poly_model();
        add_video_plane_base();


        function addPointLight(){
            const pointLight = new THREE.PointLight( 0xffd4e0, 0.3);
            pointLight.position.set(0, 0, 0);
            scene.add(pointLight);
            const pointLight1 = new THREE.PointLight( 0xffd4e0, 0.3);
            pointLight1.position.set(100, 0, 0);
            scene.add(pointLight1);
            const pointLight2 = new THREE.PointLight( 0xffd4e0, 0.3);
            pointLight2.position.set(0, 0, 100);
            scene.add(pointLight2);
            const pointLight3 = new THREE.PointLight( 0xffd4e0, 0.3);
            pointLight3.position.set(-100, 0, 0);
            scene.add(pointLight3);
            const pointLight4 = new THREE.PointLight( 0xffd4e0, 0.3);
            pointLight4.position.set(0, 0, -100);
            scene.add(pointLight4);
        }
        


        //space

        var SpaceShuttle1 = '';
        var SpaceShuttle2 = '';
        var SpaceShuttle3 = '';
        var SpaceShuttle4 = '';

        function addSpaceShuttle(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/SpaceShuttle/Orbiter_Space_Shuttle_OV-103_Discovery-150k-4096.gltf', function ( gltf ) {
                SpaceShuttle1 = gltf.scene;
                SpaceShuttle1.position.set(10, 27, 10);
                SpaceShuttle1.scale.set(0.1*SpaceShuttle1.scale.x, 0.1*SpaceShuttle1.scale.y, 0.1 * SpaceShuttle1.scale.z)
                scene.add( SpaceShuttle1 );
                SpaceShuttle2 = SpaceShuttle1.clone(true);
                SpaceShuttle2.position.set(-20, 55, -10);
                scene.add(SpaceShuttle2);
                SpaceShuttle3 = SpaceShuttle1.clone(true);
                SpaceShuttle3.position.set(50, 55, 50);
                scene.add(SpaceShuttle3);
                SpaceShuttle4 = SpaceShuttle1.clone(true);
                SpaceShuttle4.position.set(-50, 30, 50);
                scene.add(SpaceShuttle4);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function SpaceShuttleMove(){
            if(SpaceShuttle1 != ''){
                SpaceShuttle1.lookAt(new THREE.Vector3(100, 80, 10));
                SpaceShuttle1.position.x += 0.01;
                SpaceShuttle1.position.y += 0.0099;
            }
            if(SpaceShuttle2 != ''){
                SpaceShuttle2.lookAt(new THREE.Vector3(-20, 55, 100));
                SpaceShuttle2.position.z += 0.03;
            }
            if(SpaceShuttle3 != ''){
                SpaceShuttle3.lookAt(new THREE.Vector3(-100, 45, -100));
                SpaceShuttle3.position.z -= 0.01;
                SpaceShuttle3.position.x -= 0.01;
            }
            if(SpaceShuttle4 != ''){
                SpaceShuttle4.lookAt(new THREE.Vector3(100, 45, -100));
                SpaceShuttle4.position.z -= 0.01;
                SpaceShuttle4.position.x += 0.01;
            }
        }

        //airship

        var airShip = '';
        var airShip1 = '';
        var airShip2 = '';
        var airShip3 = '';
        var airShip4 = '';

        function addAirShip(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/aot_marley_airship/scene.gltf', function ( gltf ) {
                airShip = gltf.scene;
                airShip.position.set(50, 30, 70);
                airShip.scale.set(0.005*airShip.scale.x, 0.005*airShip.scale.y, 0.005 * airShip.scale.z)
                scene.add( airShip );
                airShip1 = airShip.clone(true);
                airShip1.position.set(-40, 25, 60);
                airShip1.scale.set(1*airShip1.scale.x, 1*airShip1.scale.y, 1*airShip1.scale.z)
                scene.add( airShip1 );
                airShip2 = airShip.clone(true);
                airShip2.lookAt(new THREE.Vector3(0, 35, 50));
                airShip2.position.set(50, 35, -40);
                airShip2.scale.set(1*airShip2.scale.x, 1*airShip2.scale.y, 1*airShip2.scale.z)
                scene.add( airShip2 );
                airShip3 = airShip.clone(true);
                airShip3.lookAt(new THREE.Vector3(-100, 35, 50));
                airShip3.position.set(-35, 35, -75);
                airShip3.scale.set(1*airShip3.scale.x, 1*airShip3.scale.y, 1*airShip3.scale.z)
                scene.add( airShip3 );
                airShip4 = airShip.clone(true);
                airShip4.lookAt(new THREE.Vector3(0, 35, 0));
                airShip4.position.set(40, 25, 95);
                airShip4.scale.set(1*airShip4.scale.x, 1*airShip4.scale.y, 1*airShip4.scale.z)
                scene.add( airShip4 );
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function AirShipMove(){
            if(airShip != ''){
                airShip.lookAt(new THREE.Vector3(100, 35, 50));
                airShip.position.x += 0.006;
                airShip.position.z += 0.0015;
            }
        }



        //floor
        function addFloor(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/floor/scene.gltf', function ( gltf ) {
                var floor = gltf.scene;
                floor.position.set(0, 0, 0);
                floor.scale.set(3*floor.scale.x, 3*floor.scale.y, 3*floor.scale.z)
                scene.add(floor);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }
        function addPlane(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/floor/scene.gltf', function ( gltf ) {
                var floor = gltf.scene;
                floor.position.set(0, -7, 0);
                floor.scale.set(250*floor.scale.x, 250*floor.scale.y, 250 * floor.scale.z)
                scene.add(floor);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function addStar(){
            for(var i = 0; i < 450; i++){
                const starGeo = new THREE.SphereGeometry(0.25, 3, 3);
                const starMat = new THREE.MeshPhongMaterial({
                    color:0xffffff
                })
                const star = new THREE.Mesh(starGeo, starMat);
                const xz = randomStar();
                var y = THREE.MathUtils.randFloat(135, 145);
                star.position.set(xz[0], y, xz[1]);
                scene.add(star);
            }
        }
        function randomStar(){
            var x = THREE.MathUtils.randFloat(-145, 145);
            var z = THREE.MathUtils.randFloat(-145, 145);
            if(Math.abs(x) + Math.abs(z) < 100){
                return randomStar();
            }else{
                return [x, z];
            }
        }



        var composer = '';
        //add_bloom();

        function add_bloom(){
            composer = new EffectComposer( render );
            composer.setSize( window.innerWidth, windowInnerHeight );

            // Tell composer that first pass is rendering scene to buffer
            var renderScene = new RenderPass( scene, camera );
            composer.addPass( renderScene );

            // Tell composer that second pass is adding bloom effect
            var bloomPass = new UnrealBloomPass( new THREE.Vector2( window.innerWidth, windowInnerHeight ), 1.5, 0.4, 0.85 );
            composer.addPass( bloomPass );

            // Tells composer that second pass gets rendered to screen
            bloomPass.renderToScreen = true;
            bloomPass.threshold = 0;
            bloomPass.strength = 0.01;
            bloomPass.radius = 0;
        }

        
        var enterphase1 = 0;
        var enterphase2 = 0;
        var enterphase3 = 0;
        var enterphase4 = 0;
        var enterphase5 = 0;


        const stats = Stats();
        document.body.appendChild(stats.dom)

        var videoTexture = '';
        var videoTextureFlag = 0;
        animation();
        function animation(){
            control.update();
            requestAnimationFrame(animation);
            render.render(scene, camera);
            SpaceShuttleMove();
            AirShipMove();

            enterStreet();
            stats.update();
        }

        var distance = 0;
        var enterAngle = 0;
        var enterDistance = 0;
        var cameraLookAtY = 30;
        var enterType = 0;

        var enterButton = document.querySelector(".enterButton");
        var moverse = document.querySelector(".moverse");
        enterButton.addEventListener("click", function(){
            enterphase1 = 1;
            distance = 2;
            control.enabled = false;
            control.autoRotate = false;
            control.minPolarAngle = 0;
            control.maxPolarAngle = Math.PI;
            enterButton.remove();
            enterAngle = control.getAzimuthalAngle();
        });


        //control.rotate(degrees); (orbitControls)
        //add
        //this.rotate = function(degrees) {
        //    rotateLeft(degrees);
   		// 	this.update();
        //}


        function enterStreet(){
            if(enterphase1){
                if(Math.abs(camera.position.z) <= 0 && camera.position.x > 0){
                    control.rotate(enterAngle);
                    //camera.position.add(enterDistance);
                }else{
                    enterphase2 = 1;
                    enterphase1 = 0;
                    loadStreetView();
                    enterDistance = new THREE.Vector3((0.5 - camera.position.x) / 180, (0.1 - camera.position.y) / 180, (0 - camera.position.z) / 180);
                    distance = 0.35;
                }
            }
            if(enterphase2){
                if(control.target.y > 0.5){
                    distance -= 0.00001;
                    cameraLookAtY -= distance;
                    control.target = new THREE.Vector3(0, cameraLookAtY, 0);
                }else{
                    control.target = new THREE.Vector3(0, 0.5, 0);
                    enterphase3 = 1;
                    enterphase2 = 0;
                }
            }if(enterphase3){
                if(camera.position.y > 0.5){
                    camera.position.add(enterDistance);
                }else{
                    streetControl();
                    addLight();
                    setTimeout(function(){
                        add_video();
                        video.play();
                    }, 1000);
                    enterphase3 = 0;
                }
            }
        }


        window.addEventListener("resize", function(){
            camera.aspect = window.innerWidth / windowInnerHeight;
            camera.updateProjectionMatrix();
            render.setSize( window.innerWidth, windowInnerHeight);
        })



        //addLight
        function addLight(){
            const light = new THREE.DirectionalLight( 0xffd4e0, 0.5);
            light.position.set(0, 300, 0);
            scene.add(light);
            const light1 = new THREE.DirectionalLight( 0xffd4e0, 0.5);
            light1.position.set(300, 300, 300);
            scene.add(light1);
            const light2 = new THREE.DirectionalLight( 0xffd4e0, 0.5);
            light2.position.set(300, 300, -300);
            scene.add(light2);
            const light3 = new THREE.DirectionalLight( 0xffd4e0, 0.5);
            light3.position.set(-300, 300, 300);
            scene.add(light3);
            const light4 = new THREE.DirectionalLight( 0xffd4e0, 0.5);
            light4.position.set(-300, 300, -300);
            scene.add(light4);

            {{-- const light = new THREE.AmbientLight( 0xffd4e0, 1, 200 );
            light.position.set( 0, 0, 0 );
            scene.add( light ); --}}

            

            const neon1 = new THREE.AmbientLight( 0xffd4e0, 1);
            neon1.position.set(-20, 30, -30);
            neon1.lookAt(new THREE.Vector3(-20, 0, -20));
            scene.add(neon1);
            const neon2 = new THREE.AmbientLight( 0xffd4e0, 1);
            neon2.lookAt(new THREE.Vector3(20, 0, 20));
            neon2.position.set(20, 30, 20);
            scene.add(neon2);
        }



        


        //addSphere
        function addSphere(){
            //const yosora = new THREE.TextureLoader().load("{{asset('/images/yosora.jpg')}}");
            const sphereGeo = new THREE.SphereGeometry(200, 100, 100);
            const sphereMat = new THREE.MeshStandardMaterial({
                //map: yosora,
                //color:0xFFA07A,
                color:0x2a2a35,
                side:THREE.DoubleSide
            })
            const sphere = new THREE.Mesh(sphereGeo, sphereMat);
            scene.add(sphere);
        }

        //addCubic
        function addCubic(){
            const cubicGeo = new THREE.BoxGeometry(1500, 400, 1500);
            const cubicMat = new THREE.MeshBasicMaterial({
                color:0x2a2a35,
                side:THREE.DoubleSide
            });
            const cubic = new THREE.Mesh(cubicGeo, cubicMat);
            scene.add(cubic);
        }


        //addMoverse
        function addMoverse(){
            const moverseJpg = new THREE.TextureLoader().load("{{asset('/images/moverse.jpg')}}");
            const moverseGeo = new THREE.BoxGeometry(81, 101.25, 81);
            var moverseMat = [];
            for(var i = 0; i < 6; i++){
                if(i == 2 || i == 3){
                    moverseMat.push(new THREE.MeshBasicMaterial({
                        color:0x2c1955
                    }));
                }else{
                    moverseMat.push(new THREE.MeshBasicMaterial({
                        map: moverseJpg
                    }));
                }
            }
            
            const moverse = new THREE.Mesh(moverseGeo, moverseMat);
            moverse.position.set(0, 90, 0)
            scene.add(moverse);


            const enterGeo = new THREE.BoxGeometry(15, 3, 15);
            const enterMat = [];
            const enterWireframe = new THREE.BoxGeometry(15, 3, 15);
            var edge = new THREE.EdgesGeometry( enterGeo );
            var edgeMat = new THREE.LineBasicMaterial( { color: 0xffffff, linewidth: 2 } );
            var wireframe = new THREE.LineSegments( edge, edgeMat );
            wireframe.position.set(0, 34.1, 0);
            //scene.add(wireframe);
        }


        



        function addCityView(){
            //TP
            var buildingPositionY = 0;
            for(var i = 0; i < 70; i++){
                for(var j = 0; j < 70; j++){
                    //rand 40%
                    if(i > 2 && j > 2){
                        var rand = THREE.MathUtils.randFloat(0, 1000);
                        //if(j < 2){
                        if((i == 10 && j == 8) || (i == 8 && j == 10) || (i == 3 && j == 6) || (i == 6 && j == 3) || (i == 11 && j == 3) || (i == 5 && j == 5) || (i == 5 && j == 12) || (i == 3 && j == 11) || (i == 6 && j == 10) || (i == 8 && j == 10)){
                            //add neon
                            var height = 55;
                            //FPS
                            addBuilding(i, buildingPositionY, j, height);
                            addBuilding(-i, buildingPositionY, -j, height);
                            addBuilding(-i, buildingPositionY, j, height);
                            addBuilding(i, buildingPositionY, -j, height);

                        }else{
                            if(rand > 745 && rand < 750){
                                var height = 70;
                                if(i == 0 || j == 0){//repeat side
                                    height = 50;
                                    addBuilding(i, buildingPositionY, j, height);
                                    addBuilding(-i , buildingPositionY, -j, height);
                                }else if((Math.abs(i) + Math.abs(j)) < 16){
                                    height = 45;
                                    addBuilding(i, buildingPositionY, j, height);
                                    addBuilding(-i, buildingPositionY, -j, height);
                                    addBuilding(-i, buildingPositionY, j, height);
                                    addBuilding(i, buildingPositionY, -j, height);
                                }else{
                                    height = 70;
                                    addBuilding(i, buildingPositionY, j, height);
                                    addBuilding(-i, buildingPositionY, -j, height);
                                    addBuilding(-i, buildingPositionY, j, height);
                                    addBuilding(i, buildingPositionY, -j, height);
                                }
                            }else if(rand < 680 && rand > 640){
                                var height = 45;
                                if(i == 0 || j == 0){//repeat side
                                    addBuilding(i, buildingPositionY, j, height);
                                    addBuilding(-i , buildingPositionY, -j, height);
                                }else{
                                    addBuilding(i, buildingPositionY, j, height);
                                    addBuilding(-i, buildingPositionY, -j, height);
                                    addBuilding(-i, buildingPositionY, j, height);
                                    addBuilding(i, buildingPositionY, -j, height);
                                }
                            }
                        }
                    }
                }
            }
        }

        async function addBuilding(x, y, z, height){
            x = await x * 3;
            z = await z * 3;
            //height 5~10
            const buildingJpg = new THREE.TextureLoader().load("{{asset('/images/building.jpg')}}");
            var buildingHeight = randomBuildingHeight(height) / 2;
            y = buildingHeight / 2;
            var buildingGeo = new THREE.BoxGeometry(3, buildingHeight, 3);
            const buildingMat = new THREE.MeshPhongMaterial({
                color: 0x000000,
                //map: buildingJpg,
                shininess:30
            });
            



            //add neon sign
            if(x == 9 && z == 18){
                buildingGeo = new THREE.BoxGeometry(3, 55, 3);
                add_japanese_neon_street_sign(9, 26, 18);
                const building = new THREE.Mesh(buildingGeo, buildingMat);
                building.position.set(x, y, z);
                scene.add(building);
                addBuildingFloor(x, z, 55);
            }else if(x == -18 && z == 9){
                buildingGeo = new THREE.BoxGeometry(3, 55, 3);
                //add_neon_playboy_logo(-18, 30, 7.5);
                const building = new THREE.Mesh(buildingGeo, buildingMat);
                building.position.set(x, y, z);
                scene.add(building);
                addBuildingFloor(x, z, 65);
            }else if(x == 33 && z == 9){
                buildingGeo = new THREE.BoxGeometry(3, 50, 3);
                //add_mario_neon_sign(33, 36, 9);
                const building = new THREE.Mesh(buildingGeo, buildingMat);
                building.position.set(x, y, z);
                scene.add(building);
                addBuildingFloor(x, z, 50);
            }else if(x == -15 && z == -15){
                buildingGeo = new THREE.BoxGeometry(3, 50, 3);
                add_letras_neon(-16, 33, -14);
                const building = new THREE.Mesh(buildingGeo, buildingMat);
                building.position.set(x, y, z);
                scene.add(building);
                addBuildingFloor(x, z, 50);
            }else if(x == 15 && z == 36){
                buildingGeo = new THREE.BoxGeometry(3, 50, 3);
                add_vb_sign_small(15, 32, 34);
                const building = new THREE.Mesh(buildingGeo, buildingMat);
                building.position.set(x, y, z);
                scene.add(building);
                addBuildingFloor(x, z, 50);
            }else if(x == -9 && z == -33){
                buildingGeo = new THREE.BoxGeometry(3, 50, 3);
                add_japanese_sign_board_014(-8, 33, -33);
                const building = new THREE.Mesh(buildingGeo, buildingMat);
                building.position.set(x, y, z);
                scene.add(building);
                addBuildingFloor(x, z, 50);
            }else if(x == -18 && z == 30){
                buildingGeo = new THREE.BoxGeometry(3, 50, 3);
                add_neon_sushi_sign(-18, 30, 25);
                const building = new THREE.Mesh(buildingGeo, buildingMat);
                building.position.set(x, y, z);
                scene.add(building);
                addBuildingFloor(x, z, 50);
            }else{
                const building = new THREE.Mesh(buildingGeo, buildingMat);
                building.position.set(x, y, z);
                scene.add(building);
                addBuildingFloor(x, z, height);
            }
            //add building floor
            
            


        }

        function randomBuildingHeight(height){
            var buildingHeight = THREE.MathUtils.randFloat(height - 15, height);
            //if(buildingHeight > 25 || buildingHeight < 20){
                return buildingHeight;
            //}else{
              //  return randomBuildingHeight(height);
            //}
        }

        //add building floor
        function addBuildingFloor(x, z, height){
            var rand = THREE.MathUtils.randFloat(0, 1000);
            var buildingFloorEdgeMat = '';
            if(rand > 875){
                buildingFloorEdgeMat = new THREE.LineBasicMaterial( { color: 0x9370DB, linewidth: 2 } );
            }else if(rand < 875 && rand > 750){
                buildingFloorEdgeMat = new THREE.LineBasicMaterial( { color: 0xDDA0DD, linewidth: 2 } );
            }else if(rand < 750 && rand > 625){
                buildingFloorEdgeMat = new THREE.LineBasicMaterial( { color: 0xFF6347, linewidth: 2 } );
            }else if(rand > 500 && rand < 625){
                buildingFloorEdgeMat = new THREE.LineBasicMaterial( { color: 0xfffff, linewidth: 2 } );
            }
            if(height % 2 == 1){
                height += 1;
            }
            //TP
            for(var i = 0; i < (height / 2) - 1; i++){
                if(i % 1002 == 1){
                    const buildingFloorGeo = new THREE.BoxGeometry(3.1, 1, 3.1);
                    var buildingFloorEdge = new THREE.EdgesGeometry( buildingFloorGeo );
                    var buildingFloorWireframe = new THREE.LineSegments( buildingFloorEdge, buildingFloorEdgeMat );
                    buildingFloorWireframe.position.set(x, i, z);
                    scene.add(buildingFloorWireframe);
                }
            }
        }



        //add neon
        function add_cyberpunk_animated_japanese_led_neon_sign(x, y, z){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/cyberpunk_animated_japanese_led_neon_sign/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(x, y, z);
                element.scale.set(3*element.scale.x, 3*element.scale.y, 3*element.scale.z)
                scene.add(element);
                if(x > 0){
                    element.lookAt(new THREE.Vector3(30, 36, -100));
                }else{
                    element.lookAt(new THREE.Vector3(-24, 36, 100));
                }
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_japanese_neon_street_sign(x, y, z){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/japanese_neon_street_sign/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(x, y, z);
                element.scale.set(5*element.scale.x, 5*element.scale.y, 5*element.scale.z)
                scene.add(element);
                element.lookAt(new THREE.Vector3(3, 25, -100));
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_neon_playboy_logo(x, y, z){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/neon_playboy_logo/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(x, y, z);
                element.scale.set(1*element.scale.x, 1*element.scale.y, 1*element.scale.z)
                element.lookAt(new THREE.Vector3(-18, 25, -100));
                scene.add(element);
                var element1 = element.clone(true);
                element1.position.set(x, y, z + 3);
                element1.scale.set(1*element1.scale.x, 1*element1.scale.y, 1*element1.scale.z)
                element1.lookAt(new THREE.Vector3(-18, 25, 100));
                scene.add(element1);
                var element2 = element.clone(true);
                element2.position.set(x + 1.5, y, z + 1.5);
                element2.scale.set(1*element2.scale.x, 1*element2.scale.y, 1*element2.scale.z)
                element2.lookAt(new THREE.Vector3(100, 25, 3));
                scene.add(element2);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_mario_neon_sign(x, y, z){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/mario_neon_sign/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(x, y, z);
                element.scale.set(1*element.scale.x, 1*element.scale.y, 1*element.scale.z)
                element.lookAt(new THREE.Vector3(-100, 50, -100));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_letras_neon(x, y, z){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/letras_neon/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(x, y, z);
                element.scale.set(2*element.scale.x, 2*element.scale.y, 2*element.scale.z)
                element.lookAt(new THREE.Vector3(100, 55, 100));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_vb_sign_small(x, y, z){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/vb_sign_small/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(x, y, z);
                element.scale.set(3*element.scale.x, 3*element.scale.y, 3*element.scale.z)
                element.lookAt(new THREE.Vector3(15, 32, -100));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_japanese_sign_board_014(x, y, z){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/japanese_sign_board_014/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(x, y, z);
                element.scale.set(5*element.scale.x, 5*element.scale.y, 5*element.scale.z)
                element.lookAt(new THREE.Vector3(-8, 33, 100));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_neon_sushi_sign(x, y, z){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/neon_sushi_sign/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(x, y, z);
                element.scale.set(0.01*element.scale.x, 0.01*element.scale.y, 0.01*element.scale.z)
                element.lookAt(new THREE.Vector3(-30, 30, 100));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }


        function add_neon_signs_street(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/neon_signs/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(7, 15, 30);
                element.scale.set(1*element.scale.x, 1*element.scale.y, 1*element.scale.z)
                element.lookAt(new THREE.Vector3(7, 15, -100));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_taiwan_style_signboard_lowpoly(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/taiwan_style_signboard_lowpoly/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(30, 5, 5);
                element.scale.set(1*element.scale.x, 1*element.scale.y, 1*element.scale.z)
                element.lookAt(new THREE.Vector3(30, 5, 100));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        
        //load street view
        function loadStreetView(){
            //scene.fog = new THREE.Fog(0x000000, 0, 50);
            //scene.fog = new THREE.Fog(0xc2c5e6, 0, 50);
            //control.enabled = true;
            //add_dragon_gate_inn_with_neon();
            //add_building_27();
            //add_cy1();
            //add_neon_stage();
            //add_virtual_stage_cyberpunk();
            
            add_video();

            {{-- control.enableZoom = true;
            control.enablePan = true;
            control.autoRotate = false;
            control.minPolarAngle = 0;
            control.maxPolarAngle = Math.PI; --}}
        }

        //add street view
        function add_dragon_gate_inn_with_neon(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/dragon_gate_inn_with_neon/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(30, 0, 0);
                element.scale.set(2*element.scale.x, 2*element.scale.y, 2*element.scale.z)
                element.lookAt(new THREE.Vector3(100, 0, -60));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_building_27(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/building_27/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(0, 2, 0);
                element.scale.set(10*element.scale.x, 10*element.scale.y, 10*element.scale.z)
                element.lookAt(new THREE.Vector3(-100, 0, 0));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_cy1(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/cy1/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(7, 0, 5);
                element.scale.set(0.5*element.scale.x, 0.25*element.scale.y, 0.5*element.scale.z)
                element.lookAt(new THREE.Vector3(-100, 0, 0));
                scene.add(element);
                var element1 = element.clone(true);
                element1.position.set(-7, 0, -5);
                element1.scale.set(1*element1.scale.x, 1*element1.scale.y, 1*element1.scale.z)
                element1.lookAt(new THREE.Vector3(100, 0, 33));
                //scene.add(element1);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_neon_stage(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/neon_stage/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(-20, 0, 0);
                element.scale.set(1*element.scale.x, 1*element.scale.y, 2*element.scale.z)
                element.lookAt(new THREE.Vector3(100, 0, 0));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }
        
        function add_virtual_stage_cyberpunk(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/virtual_stage_cyberpunk/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(0, 0, -12);
                element.scale.set(2*element.scale.x, 1.5*element.scale.y, 1*element.scale.z)
                element.lookAt(new THREE.Vector3(100, 0, 0));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_soda_vending_machine(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/soda_vending_machine/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(-6, 1, 10);
                element.scale.set(2*element.scale.x, 2*element.scale.y, 2*element.scale.z)
                element.lookAt(new THREE.Vector3(-100, 0, 50));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        function add_stairs__road_2_nowhere__free_3d_low_poly_model(){
            const loader = new GLTFLoader();
            loader.load( '/3DModel/stairs__road_2_nowhere__free_3d_low-poly_model/scene.gltf', function ( gltf ) {
                var element = gltf.scene;
                element.position.set(0, 0, -10);
                element.scale.set(2*element.scale.x, 2*element.scale.y, 2*element.scale.z)
                element.lookAt(new THREE.Vector3(0, 0, 100));
                scene.add(element);
            }, undefined, function ( error ) {
                console.error( error );
            } );
        }

        






        //add video
        var video = '';

        function add_video(){
            video = document.createElement("video");
            video.src = "{{asset('videos/video.mp4')}}";
            video.addEventListener("playing", function(){
                add_video_plane();
            });
            video.loop = false;
            video.width = 384;
            video.height = 216;
            video.muted = true;
        }
        


        function add_video_plane(){
            videoTexture = new THREE.VideoTexture(video);
            const videoPlaneGeo = new THREE.PlaneGeometry(14, 8);
            const videoPlaneMat = new THREE.MeshBasicMaterial({
                //color: "white",
                map: videoTexture,
                side: THREE.FrontSide
            });
            
            const videoPlane = new THREE.Mesh(videoPlaneGeo, videoPlaneMat);
            videoPlane.position.set(-7, 4, 0);
            videoPlane.rotation.y = 0.5 * Math.PI;
            scene.add(videoPlane);
            videoTexture.needsUpdate = false;
        }

        function add_video_plane_base(){
            const videoPlaneGeo = new THREE.PlaneGeometry(14, 8);
            const videoPlaneMat = new THREE.MeshBasicMaterial({
                color: "black",
                side: THREE.DoubleSide
            });
            const videoPlane = new THREE.Mesh(videoPlaneGeo, videoPlaneMat);
            videoPlane.position.set(-7, 4, 0);
            videoPlane.rotation.y = 0.5 * Math.PI;
            scene.add(videoPlane);
        }

        //TP
        {{-- camera.position.set(160, 50, 0);
        control.enableZoom = true;
        control.enablePan = true;
        control.autoRotateSpeed = 0.1;
        control.minPolarAngle = 0;
        control.maxPolarAngle = Math.PI;
        loadStreetView();
        control.autoRotate = true; --}}

    </script>
        