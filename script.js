/* ABOUT ANIMATIONS GSAP */
gsap.from(".descText",{
    scrollTrigger: {
        trigger: ".descText",
        toggleActions: "restart pause none pause"
    },
    y: 100,
    opacity: 0,
    duration: .8
})

gsap.from(".descP p, .meContacter",{
    scrollTrigger: {
        trigger: ".descP p, .meContacter",
        toggleActions: "restart pause none pause"
    },
    y: 100,
    skewY: 10,
    opacity: 0,
    delay: .3,
    duration: 1,
    stagger: {
        amount: .5
    }
})

gsap.from(".descHero",{
    scrollTrigger: {
        trigger: ".descHero",
        toggleActions: "restart none none none"
    },
    height:0,
    opacity: 0,
    delay: .8,
    duration: 1.5
});

gsap.from(".galerie",{
    scrollTrigger: {
        trigger: ".galerie",
        toggleActions: "restart pause none pause"
    },
    y: 100,
    opacity: 0,
    duration: .8
});
