var json = {
    title: "Questionnaire",
    showProgressBar: "bottom",
    goNextPageAutomatic: true,
    showNavigationButtons: true,
    pages: [
        {
            questions: [
                {
                    type: "text",
                    name: "HouseholdName",
                    title: "Household Name:",
                    isRequired: true,
                },
                {
                    type: "text",
                    name: "PeopleInTheHouse",
                    title: "Number of people residing in the dwelling",
                    isRequired: true,
                }
            ]
        }, {
            questions: [
                {
                    type: "text",    /*startWithNewLine: false,*/
                    name: "NumOfFemales",
                    title: "Of those how many are females?",
                    
                },
                {
                    type: "matrixdynamic",
                    name:"ListDownFemaleAge",
                    addRowText: "Add age",
                    title: "If there are any, list down their ages",
                    columns: [
                        {
                            name: "AgesOfFemales",
                            title: "Age of Female",
                            cellType: "text",
                        }
                    ]
                }
            ]
        }, {
            questions: [
                {
                    type: "text",
                    name: "NumOfMales",
                    title: "Male?",
                    isRequired: true,
                },
                {
                    type: "matrixdynamic",
                    name:"ListDownMaleAge",
                    addRowText: "Add age",
                    title: "If there are any, list down their ages",
                    columns: [
                        {
                            name: "AgesOfMales",
                            title: "Age of Male",
                            cellType: "text",
                        }
                    ]
                }
            ]
        }, {
            questions: [
                {
                    type: "text",
                    name: "Married",
                    title: "How many people are married?",
                },
                {
                    type: "text",
                    name: "Single",
                    title: "How many people are single?",
                }
            ]
        }, {
            questions: [
                {
                    type: "text",
                    name: "Jobless",
                    isRequired: true,
                    title: "How many people above 18 are NOT employed?",
                },
                {
                    type: "text",
                    name: "IsSelfEmployed",
                    isRequired: true,
                    title: "How many people above 18 are SELF-EMPLOYED?",
                },
                {
                    type: "text",
                    name: "HasJob",
                    isRequired: true,
                    title: "How many people above 18 are employed (have a boss)?",
                },
                {
                    type: "matrixdynamic",
                    name: "ListDownOccupations",
                    title: "List down the occupations within the household",
                    addRowText: "Add Occupation",
                    columns: [
                        {
                            name: "Occupation",
                            title: "Occupation",
                            cellType: "text",
                        }
                    ]
                }
            ]
        }, {
            questions: [
                {
                    type: "text",
                    name: "NumOfCars",
                    title: "How many cars or vans are owned or are available for use?",
                   
                },
                {
                    type: "matrixdynamic",
                    name: "ListDownCarTypes",
                    title: "If you do, list the types",
                    addRowText: "Add Car Type",
                    columns: [
                        {
                            name: "TypeOfCar",
                            title: "Car type",
                            cellType: "text",
                        }
                    ]
                }
            ]
        }, {
            questions: [
                {
                    type: "checkbox",
                    name: "Religion",
                    title: "What is your religion?",
                    hasOther: true,
                    isRequired: true,
                    choices: ["Judaism", "Christianity", "Islam", "Hinduism", "Atheism"]
                }
            ]
        }, {
            questions: [
                {
                    type: "checkbox",
                    name: "EthnicGroup",
                    title: "What is your ethnic or cultural background?",
                    choices: ["Luo", "Kikuyu", "Luhya", "Meru", "Kalenjin", "other"]
                }
            ]
        }, {
            questions: [
                {
                    type: "checkbox",
                    name: "SpeakOtherLanguage",
                    title: "Do you speak a language other than English or Swahili at home?",
                    colCount: 1,
                    isRequired: true,
                    hasOther: true,
                    choices: ["Luo", "Kikuyu", "Luhya", "Meru", "Kalenjin", "French", "Spanish", "German", "Chinese" ]
                }
            ]
        }
    ],
  };

window.survey = new Survey.Model(json);

survey.onComplete.add(function (result) {
        document.querySelector('#surveyResult').innerHTML = "result: " + JSON.stringify(result.data);  //Displaying results on the form
    });

$("#surveyElement").Survey({model: survey});

