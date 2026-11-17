import type { ImageMetadata } from "astro";

import samariaDooms from "../assets/samaria-dooms.jpg";
import starsLogo from "../assets/stars-logo.png";
import smithCardFront from "../assets/smith-card-front.jpg";
import smithCardBack from "../assets/smith-card-back.jpg";

export type Testimony = {
	/** URL segment under /testimony/, kept from the WordPress site so old links still work. */
	slug: string;
	name: string;
	/** Round headshot shown beside the name. */
	photo?: { src: ImageMetadata; alt: string };
	/** Shown above the text, e.g. the organisation's logo. */
	logo?: { src: ImageMetadata; alt: string };
	paragraphs: string[];
	/** Shown below the text, e.g. a scanned thank-you card. */
	gallery?: { src: ImageMetadata; alt: string }[];
};

/** In the order the Testimonies page lists them: newest first. */
export const testimonies: Testimony[] = [
	{
		slug: "shelley-faulkner-m-a-ed-s",
		name: "Shelley Faulkner M.A., Ed.S.",
		paragraphs: [
			"Dr. Carr was a steadfast presence in my client’s life which I feel helped her to see more positive possibilities for her future. Dr. Carr provided my client with individualized and focused support that she needed during a challenging time in her life. This extra support helped to scaffold my client’s sense of what a trustworthy relationship looks and feels like.",
			"I believe that putting in the extra time and effort often help children/students to feel that they really do matter and that their life is meaningful and worthwhile. Being a constant, honest and present adult, helps to create trust in the relationship between adult and child. Young people need to learn what a safe and trusting relationship and I was able to witness Dr. Carr be that person for my client. Dr. Carr’s guidance through the positive seeds planted by the Education Transformation Centre, will have lasting effects on my client’s life, whether she sees/feels it now or in her future.",
			"All the best Dr. Carr and I hope to work with you again very soon. I love what you are doing!",
		],
	},
	{
		slug: "deborah-parker",
		name: "Deborah Parker",
		paragraphs: [
			"I was impressed by the encouragement and support that was given to our grandson during the short time that he was enrolled there. He did not complete due to COVID-19. I felt that ETC was a good fit for him at that time because he was struggling in school. The ETC allowed him to work on his academics in a smaller setting as well as work on his behavior modification.",
			"I believe that the ETC will give students who just don’t fit in the mainstream school, a head start on their road to a successful educational experience.",
			"Dr. Carr was always professional, informative and guided us through the enrollment process. She also followed up on his progress after the COVID shutdown. She continued to encourage him to be the best that he could be.",
			"I recommend that if your child is having difficulties in school and need one on one attention, take the time to check out what the Educational Transformation Centre can offer.",
		],
	},
	{
		slug: "adrainne-johnson",
		name: "Adrainne Johnson",
		paragraphs: [
			"I would like to share my experience working with Education Transformation Centre (ETC). First I would like to say, the staff was very supportive of the child. They are very great with making sure the kids get an education. They also go above and beyond, if the student needs more assistance, Dr. Carr will get the student tutors for more one on one.",
			"Education Transformation Centre makes sure the students achieve their goals that will get the student back into the regular school setting and for adulthood. My daughter used to be upset that she had to go through the program. After she got the understanding of the program, she starting accepting the things she had to do was only going to make her become successful in life. ETC will continued to follow the student till graduation.",
			"So, my message to students and parents is ETC is a great program, I highly recommend it. My daughter was struggling in math, ETC made her struggle come to ease. My daughter will be a graduate with her class of 2021.",
		],
	},
	{
		slug: "rydell-payne",
		name: "Rydell Payne",
		logo: { src: starsLogo, alt: "STARS — Structured Therapeutic Adolescent Residential Services" },
		paragraphs: [
			"Here at STARS (Structured Therapeutic Adolescent Residential Services) we serve youth 13-18 years old who have experienced various traumas, losses, and abuse; however, they can show a lot of resilience and live successfully. Education Transformation Centre (ETC) under Dr. Carr’s leadership was able to establish rapport with our youth quickly where respect and hope was at the core of their services from the beginning to end.",
			"Dr. Carr certainly has a lot of expertise in serving our population, in addition, the two interns, displayed incredible energy and patience to connect with our residents. Residents expressed that they felt heard, trusted, and respected by the ETC team. On this foundation, ETC was able to help our residents unearth their potential thereby increasing their resolve to be successful and looking at how current behaviors dampen their progress toward reaching current program goals.",
			"What impressed us the most was the ability of ETC staff to provide programing that kept residents engaged at least 90% of the time during a three-hour program, three days a week that was creative, relevant, and inspiring. The first week of the program, we heard staff remarking, “we need to hire them now for next year,” later STARS staff were asking the question “how do we get them involved with our youth during the school year” and the final week staff expressing “we gotta have them back next year.”",
			"We are grateful for the vast efforts of ETC to get community speakers involved that could reinforce a consistent message that you matter, you deserve respect, and you are to respect others.",
			"Finally, ETC did an excellent job of celebrating our youth by having them decorate their space with positive affirmations, putting on a talent show and a business casual lunch at the Omni Hotel where they learned social etiquette. Honestly, our staff did not do anything terribly wrong, but the residents may have behaved better than we did. They were well prepared by ETC. At these events, residents had a voice to express their personal gratitude towards the STARS staff as well.",
			"We highly recommend ETC’s services without any reservations.",
		],
	},
	{
		slug: "regenia-jackie-smith",
		name: "Regenia & Jackie Smith",
		paragraphs: [
			"Jackie and I are so excited about your school and what it offered us. When we first came to Education Transformation Centre, I didn’t think Jackie had a dream in her spirit. With your help and attending your school, Jackie has many dreams.",
			"She is excelling in her schoolwork and focused more than I have ever seen her. When Jackie started, she was failing 9th grade. With improved attendance and help from your school, she successfully completed 9th grade in 4 months.",
			"I would suggest to parents who have children that may not be focused, seem not to care, just don’t have it together or your child may be behind in their work and in their minds, they just don’t know how to get caught up, please contact Dr. Dolores Carr with Education Transformation Centre.",
			"Jackie loves attending class and now does a great deal more school work at home. She has set a goal for when she wants to complete 10th grade and has plans to do dual classes to get some college credit.",
			"Jackie has done a complete turnaround. This is the best she has ever done. She has only attended private schools, but they did not bring out the best of all she can do. The Education Transformation Centre really transformed this young lady of mine into a new person! She has hopes and dreams like all young people should. We must keep the dream alive in our young people.",
			"Thank you, Dr. Dolores Carr and staff. WONDERFUL PEOPLE.",
			"Love,\nRegenia & Jackie Smith, 10th grade student",
		],
		gallery: [
			{ src: smithCardFront, alt: "Front of a handwritten thank-you card from Regenia and Jackie Smith" },
			{ src: smithCardBack, alt: "Back of the thank-you card from Regenia and Jackie Smith" },
		],
	},
	{
		slug: "samaria-dooms",
		name: "Samaria Dooms",
		photo: { src: samariaDooms, alt: "Samaria Dooms" },
		paragraphs: [
			"Attending the Education Transformation Centre (ETC) has been a wonderful experience for me. I attended CHS and was bullied and had a low GPA. While I have been at etc I have built myself confidence, strengthened my GPA and started a small business.",
			"Thanks to the help of Dr. Dolores Carr and tutors I’m on a better path now. I recommend the Education Transformation Centre (ETC) because it will transform your life and get you on the right path.",
		],
	},
];
